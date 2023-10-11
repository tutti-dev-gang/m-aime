import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import * as React from 'react';

export default function Dashboard(props) {
   

    return (
        <AuthenticatedLayout
            auth={props.auth}
            errors={props.errors}
        >
            <Head title={props.user.name} />
            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    {props.user.name}
                    <br/>
                    {props.user.email}
                    <br/>
                    {props.user.created_at}
                    <br/>
                    {props.user.profile_description}
                    <br/>
                    {props.user.location}
                    <br/>
                    {props.user.age}
                    <br/>
                    {props.user.last_login}
                    <br/>
                    {props.user.interests[1].name}
                    <br/>
                    {props.user.gender}
                </div>
            </div>
           
        </AuthenticatedLayout>
    );
}
