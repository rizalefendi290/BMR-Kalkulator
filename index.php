<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMR Kalkulator</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold text-center mb-6 text-gray-800">Kalkulator BMR</h1>
        <form action="bmr.php" method="POST" class="space-y-4">
            <div>
                <label for="gender" class="block text-sm font-medium text-gray-700">Jenis Kelamin:</label>
                <select name="gender" id="gender"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    required>
                    <option value="male">Laki-laki</option>
                    <option value="female">Perempuan</option>
                </select>
            </div>

            <div>
                <label for="age" class="block text-sm font-medium text-gray-700">Usia:</label>
                <input type="number" name="age" id="age"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    required>
            </div>

            <div>
                <label for="weight" class="block text-sm font-medium text-gray-700">Berat (kg):</label>
                <input type="number" name="weight" id="weight"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    required>
            </div>

            <div>
                <label for="height" class="block text-sm font-medium text-gray-700">Tinggi (cm):</label>
                <input type="number" name="height" id="height"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    required>
            </div>
            <div>
                <label for="activity" class="block text-sm font-medium text-gray-700">Tingkat Aktivitas:</label>
                <select name="activity" id="activity"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    required>
                    <option value="1.2">Sangat Rendah (Tidak Ada Olahraga)</option>
                    <option value="1.375">Rendah (Olahraga Ringan 1-3x/Minggu)</option>
                    <option value="1.55">Sedang (Olahraga Moderat 3-5x/Minggu)</option>
                    <option value="1.725">Tinggi (Olahraga Berat 6-7x/Minggu)</option>
                    <option value="1.9">Sangat Tinggi (Atlet/Latihan Intensif)</option>
                </select>
            </div>


            <div class="flex justify-center">
                <button type="submit"
                    class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition">
                    Hitung BMR
                </button>
            </div>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

</html>