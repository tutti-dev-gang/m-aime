import { useEffect } from 'react';
import Checkbox from '@/Components/Checkbox';
import GuestLayout from '@/Layouts/GuestLayout';
import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import { Head, Link, useForm } from '@inertiajs/react';
import SocialBtn from '@/Components/SocialBtn';

export default function Login({ status, canResetPassword }) {
    const { data, setData, post, processing, errors, reset } = useForm({
        email: '',
        password: '',
        remember: '',
    });

    useEffect(() => {
        return () => {
            reset('password');
        };
    }, []);

    const handleOnChange = (event) => {
        setData(event.target.name, event.target.type === 'checkbox' ? event.target.checked : event.target.value);
    };

    const submit = (e) => {
        e.preventDefault();

        post(route('login'));
    };

    return (
        <GuestLayout>
            <Head title="Se connecter" />
                <form onSubmit={submit} className='login_form'>
                    <div className="form-container">
                        <div className="login_form-container">
                            <div className='login_form-content'>
                                <InputLabel htmlFor="email" value="Email" className='login_form-input-label' />
                                <div className='login_form-input'>
                                    <TextInput
                                        id="email"
                                        type="email"
                                        name="email"
                                        className={errors.email ? 'error' : null}
                                        value={data.email}
                                        autoComplete="username"
                                        isFocused={true}
                                        onChange={handleOnChange}
                                    />
                                    <InputError message={errors.email} className="login_form-error_message" />
                                </div>
                                <InputLabel htmlFor="password" value="Mot de passe"  className='login_form-input-label' />
                                <div className='login_form-input'>
                                    <TextInput
                                        id="password"
                                        type="password"
                                        name="password"
                                        value={data.password}
                                        className={errors.email ? 'error' : null}
                                        autoComplete="current-password"
                                        onChange={handleOnChange}
                                    />
                                    <InputError message={errors.password} className="login_form-error_message" />
                                </div>
                            </div>

                            <div className="login_form-btns_container">
                                <PrimaryButton className="login_form-btn" disabled={processing}>
                                    Se connecter
                                </PrimaryButton>
                                <Link
                                    href={route('password.request')}
                                    className="login_form-forgot_password"
                                >
                                    Mot de passe oublié?
                                </Link>
                            </div>
                        </div>
                        
                        <div className="login_form-socialite_container">
                            <SocialBtn className="discord" disabled={processing} href="/users/1">
                                <i class="fa-brands fa-discord"></i>
                            </SocialBtn>
                            <SocialBtn className="google" disabled={processing} href="/users/1">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                                    <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                                </svg>                            
                            </SocialBtn>
                            <SocialBtn className="github" disabled={processing} href="/users/1">
                                <i class="fa-brands fa-github"></i>
                            </SocialBtn>
                        </div>
                    </div>
                </form>
        </GuestLayout>
    );
}
