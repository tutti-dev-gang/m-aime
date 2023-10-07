import { useState } from 'react';
import ApplicationLogo from '@/Components/ApplicationLogo';
import Dropdown from '@/Components/Dropdown';
import NavLink from '@/Components/NavLink';
import BtnLink from '@/Components/Header/BtnLink';
import Button from '@/Components/Header/Button';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink';
import { Link } from '@inertiajs/react';
import Header from '@/Components/Header/Header';
import NavBar from '@/Components/Header/NavBar';

export default function Authenticated({ auth, header, children }) {
    const [showingNavigationDropdown, setShowingNavigationDropdown] = useState(false);
    return (
        <>
            <div className='header_container'>
                <Header is_auth={true} auth={auth}/>
                <NavBar auth={auth}/>
            </div> 

            <main>
                <div className="main-container">
                    {children}
                </div>
            </main>
        </>
    );
}

