import { Head } from '@inertiajs/react';
import MainLayout from '../MainLayout';
import wallpaper from '@images/regions/wallpaper.png';
import CardGrid from '../Components/CradGrid';
import Card from '../Components/Card';

export default function Regions({ regions }) {
    return (
        <>
            <Head title="Regions" />

            <MainLayout>
                <h1 className="text-2xl font-bold text-white mb-4">Regions</h1>

             <CardGrid>
                    {regions.map((region) => (
                        <Card
                            key={region.id}
                            image={wallpaper}
                            title={region.name}
                            href={`/regions/${region.id}/countries`}
                        />
                    ))}
                </CardGrid>

            </MainLayout>
        </>
    );
}