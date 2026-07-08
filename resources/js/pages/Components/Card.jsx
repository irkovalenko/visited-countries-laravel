import { Link } from "@inertiajs/react";

export default function Card({ image, title, href }) {
    const content = (
        <div
            className="rounded-lg overflow-hidden h-full"
            style={{ background: '#302E4A' }}
        >
            <img
                src={image}
                alt={title}
                className="w-full h-40 object-cover"
            />

            <div className="p-4">
                <span className="text-white font-medium">
                    {title}
                </span>
            </div>
        </div>
    );

    if (href) {
        return (
            <Link href={href} className="block hover:opacity-90 transition-opacity">
                {content}
            </Link>
        );
    }

    return content;
}