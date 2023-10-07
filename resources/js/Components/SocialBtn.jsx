export default function SocialBtn({ className = '', disabled, children, href, ...props }) {
    return (
        <a
            {...props}
            className={`socialite-btn ${className}`}
            disabled={disabled}
            href={href}
        >
            {children}
        </a>
    );
}
