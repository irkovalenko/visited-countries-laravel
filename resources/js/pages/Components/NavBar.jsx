import { Link, usePage } from "@inertiajs/react";

export default function NavBar() {
    const { url } = usePage();

    const navItems = [
        { label: 'Home', href: '/' },
        {label: 'Posts', href: '/posts' },
        { label: 'Countries', href: '/countries' },
        { label: 'Regions', href: '/regions' },
        { label: 'Cities', href: '/cities' },
    ];

    return (
        <nav
            className="border-b"
            style={{ background: '#2A2840', borderColor: '#3A3856' }}
        >
            <div className="max-w-full mx-auto px-4">
                <div className="flex items-center justify-between h-16">
                    <div className="text-xl font-semibold text-white">
                        Visited Countries
                    </div>
                    <ul className="flex gap-6">
                        {navItems.map((item) => {
                            const isActive = url === item.href;

                            return (
                                <li key={item.href}>
                                    <Link
                                        href={item.href}
                                        className="font-medium transition-colors"
                                        style={{
                                            color: isActive ? '#6FE0D8' : '#9B98B5',
                                        }}
                                        onMouseEnter={(e) => {
                                            if (!isActive) e.currentTarget.style.color = '#FFFFFF';
                                        }}
                                        onMouseLeave={(e) => {
                                            if (!isActive) e.currentTarget.style.color = '#9B98B5';
                                        }}
                                    >
                                        {item.label}
                                    </Link>
                                </li>
                            );
                        })}
                    </ul>
                </div>
            </div>
        </nav>
    );
}