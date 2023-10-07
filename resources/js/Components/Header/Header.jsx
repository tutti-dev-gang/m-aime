import { useState } from 'react';
import BtnLink from '@/Components/Header/BtnLink';
import Button from '@/Components/Header/Button';


export default function Header({ is_auth, auth }) {
    return (
        <div className='header'>
            <div className='header-logo_container'>
                <i className="fa-regular fa-heart"></i>
                M'aime
            </div>
            <div className="header-btns_container">
                <BtnLink href={route('profile.edit')} active={route().current('profile.edit')}>
                        {is_auth ? auth.user.name : 'Administration'}
                </BtnLink>
                {!is_auth && <Button href={route('dashboard')} active={route().current('dashboard')}>
                        Télécharger
                </Button>}
            </div>
        </div>
    );
}

