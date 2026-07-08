import { Head } from '@inertiajs/react';
import MainLayout from './MainLayout';

export default function Dashboard() {
    return (
        <>
             <MainLayout>
            <Head title="Dashboard" />
            <h1 className="text-2xl font-bold text-white">Dashboard</h1>
        </MainLayout>
             
        </>
    );
}