import { Link } from '@inertiajs/react';

export default function Button({ active = false, className = '', children, ...props }) {
    return (
            <Link {...props} className='btn-button btn'>
                {children}
            </Link>
    );
}
