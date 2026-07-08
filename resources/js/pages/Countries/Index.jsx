import { Head } from '@inertiajs/react';
import MainLayout from '../MainLayout';
import CardGrid from '../Components/CradGrid';
import Card from '../Components/Card';

export default function Countries({ countries }) {
    return (
        <>
            <Head title="Countries" />

            <MainLayout>
                <h1 className="text-2xl font-bold text-white mb-4">Countries</h1>

             <CardGrid>
                    {countries.map((country) => (
                        <Card
                            key={country.id}
                            image={country.flagUrl}
                            title={country.name}
                            href={`/countries/${country.id}`}
                        />
                    ))}
                </CardGrid>

            </MainLayout>
        </>
    );
}