import { Head } from '@inertiajs/react';
import MainLayout from '../MainLayout';
import wallpaper from '@images/regions/wallpaper.png';
import CardGrid from '../Components/CradGrid';
import Card from '../Components/Card';

export default function Cities({ cities }) {
    return (
        <>
            <Head title="Cities" />

            <MainLayout>
                <h1 className="text-2xl font-bold text-white mb-4">Cities</h1>

             <CardGrid>
                    {cities.map((city) => (
                        <Card
                            key={city.id}
                            image={city.country?.countryFlagUrl()}
                            title={city.name}
                            href={`/cities/${city.id}`}
                        />
                    ))}
                </CardGrid>

            </MainLayout>
        </>
    );
}