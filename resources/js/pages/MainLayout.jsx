import NavBar from './Components/NavBar';

export default function MainLayout({ children }) {
    return (
        <div className="min-h-screen" style={{ background: '#201E33' }}>
            <NavBar />

            <main className="max-w-full mx-auto px-4 py-8">
                {children}
            </main>
        </div>
    );
}