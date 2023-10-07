import { Link } from '@inertiajs/react';

export default function BtnLink({ active = false, className = '', children, ...props }) {
    return (
        <Link {...props} className={`btn btn-link ${active ? "active" : null}`}>
            {children}
        </Link>
    );
}
