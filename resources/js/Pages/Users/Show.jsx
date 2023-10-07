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

        </AuthenticatedLayout>
    );
}
