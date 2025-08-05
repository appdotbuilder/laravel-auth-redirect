import React from 'react';
import { AppShell } from '@/components/app-shell';
import Heading from '@/components/heading';

interface Props {
    user: {
        id: number;
        name: string;
        email: string;
        role: string;
    };
    [key: string]: unknown;
}

export default function AdminDashboard({ user }: Props) {
    return (
        <AppShell>
            <div className="container mx-auto p-6">
                <Heading title="🔐 Dashboard Admin" />
                <div className="bg-white rounded-lg shadow-md p-6 mt-6">
                    <div className="text-center">
                        <h2 className="text-2xl font-bold text-gray-800 mb-4">
                            Selamat datang, {user.name}!
                        </h2>
                        <p className="text-lg text-gray-600">
                            Anda login sebagai <span className="font-semibold text-blue-600">{user.role}</span>
                        </p>
                        <div className="mt-6 p-4 bg-blue-50 rounded-lg">
                            <p className="text-sm text-blue-800">
                                Sebagai admin, Anda memiliki akses penuh ke seluruh sistem.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </AppShell>
    );
}