import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import * as React from 'react';
import { DataGrid } from '@mui/x-data-grid';

 const columns = [
    { field: 'id', headerName: 'ID' },
    { field: 'name', headerName: 'Nom', flex: 1 },
    { field: 'email', headerName: 'Email', flex: 1 },
    { field: 'age', headerName: 'Date de naissance', flex: 1 },
    { field: 'location', headerName: 'Ville', flex: 1 },
    { field: 'last_login', headerName: 'Dernière connexion', flex: 1 },
    { field: 'gender', headerName: 'Genre', flex: 1 },
    { field: 'created_at', headerName: 'Créé le', width: 150 },
];



export default function Dashboard(props) {
   

    return (
        <AuthenticatedLayout
            auth={props.auth}
            errors={props.errors}
        >
            <Head title="Utilisateurs" />

            <DataGrid
                rows={props.users}
                columns={columns}
                initialState={{
                    pagination: {
                    paginationModel: { 
                        page: 0, 
                        pageSize: 20 },
                    },
                }}
                pageSizeOptions={[10, 20, 50]}
                // checkboxSelection
                onRowClick={(row) => {
                    return window.location.href = '/users/' + row.row.id;
                }}
            />
        </AuthenticatedLayout>
    );
}
