import { useState } from 'react';
import BtnLink from '@/Components/Header/BtnLink';
import Button from '@/Components/Header/Button';


export default function Header({ auth }) {
    return (
        <div className='navbar'>
            <div className='navbar-btns_conatainer'>
                <BtnLink href={route('dashboard')} active={route().current('dashboard')} className='active'>
                    Dashboard
                </BtnLink>
                <BtnLink href={route('users')} active={route().current('users')}>
                    Utilisateurs
                </BtnLink>
                <BtnLink href={route('parameters')} active={route().current('parameters')}>
                    Paramètres 
                </BtnLink>
            </div>
        </div>
    );
}

