import React from 'react';
import Header from '@/Components/Header/Header';
export default function Welcome(props) {
    return (
        <>
            <div className='header_container'>
                <Header is_auth={false} />
            </div>
        </>
    );
}
