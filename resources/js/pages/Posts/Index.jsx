import { Head } from '@inertiajs/react';
import MainLayout from '../MainLayout';

export default function Posts() {
    return (
        <>
             <MainLayout>
            <Head title="Posts" />
            <h1 className="text-2xl font-bold text-white">Posts</h1>
        </MainLayout>
             
        </>
    );
}