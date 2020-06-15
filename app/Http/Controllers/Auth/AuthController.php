<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\Models\Auth\Role;
use App\Models\Auth\User;
use App\Modules\Backend\StudentApplicant\Repositories\StudentApplicantRepository;
use Illuminate\Http\Request;
use Auth;
use Socialite;
use DB;

class AuthController extends Controller
{
  private $studentApplicantRepository;

    public function __construct(StudentApplicantRepository $studentApplicantRepository)
    {
           $this->studentApplicantRepository=$studentApplicantRepository;
    }

    //login with social media
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();
        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);

        return redirect()->route('student.index');
//        return redirect($this->redirectTo);
    }

    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_id', $user->id)->first();

        if ($authUser) {
            return $authUser;
        }
        DB::beginTransaction();
        try {
            $user = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'provider' => $provider,
                'provider_id' => $user->id,
                'status' => 'active'
            ]);


            $role = Role::where('name', '=', 'student')->first();
//            $user->assignRole($role);
            $user->roles()->sync($role->id);
            $studentApplicantCreate=$this->studentApplicantRepository->create(['student_id'=>$user->id,'email'=>$user->email]);
            DB::commit();
            return $user;
        } catch (\Exception $e) {
            dd($e->getMessage());
            return $e;
        }
    }

    public function studentSignupStore(Request $request)
    {
        DB::beginTransaction();
        try {
            $authUser = User::where('email', $request->email)->first();
            if (!$authUser) {
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'status' => 'active',
                    'password' => bcrypt($request->password),
                ]);
                $role = Role::where('name', '=', 'student')->first();
//             $user->assignRole($role);
                $user->roles()->sync($role->id);
                $studentApplicantCreate=$this->studentApplicantRepository->create(['student_id'=>$user->id,'email'=>$request->email]);

                Auth::login($user, true);
                DB::commit();
                return redirect()->route('student.index');
            }
            session()->flash('success', 'User already registered with this email.Please use another email');
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollback();
            dd($e->getMessage());
            return $e;

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        //
    }

}
