<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="h-full">
  <div class="min-h-full">
      <nav class="bg-gray-800" x-data="{ isOpen: false }">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
              <div class="shrink-0">
                <img class="h-8 w-8" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
              </div>
              <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                  <a href="/" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Dashboard</a>
                  <a href="/pasien" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Patients</a>
                  <a href="/jadwal" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Appointment</a>
                </div>
              </div>
            </div>
            <div class="hidden md:block">
              <div class="ml-4 flex items-center md:ml-6">
                <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">View notifications</span>
                  <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                  </svg>
                </button>
    
                <!-- Profile dropdown -->
                <div class="relative ml-3">
                  <div>
                    <button type="button" @click="isOpen = !isOpen"
                     class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                      <span class="absolute -inset-1.5"></span>
                      <span class="sr-only">Open user menu</span>
                      <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </button>
                  </div>
    
                  <div x-show="isOpen"
                  x-transition:enter="transition ease-out duration-100 transform"
                  x-transition:enter-start="opacity-0 scale-95"
                  x-transition:enter-end="opacity-100 scale-100"
                  x-transition:leave="transition ease-in duration-75 transform"
                  x-transition:leave-start="opacity-100 scale-100"
                  x-transition:leave-end="opacity-0 scale-95"
                    class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="-mr-2 flex md:hidden">
              <button type="button" @click="isOpen = !isOpen"
                 class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                <span class="absolute -inset-0.5"></span>
                <span class="sr-only">Open main menu</span>
                <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </nav>
  
    <header class="bg-white shadow">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Dashboard</h1>
      </div>
    </header>
    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <body class="font-roboto bg-gray-100">
            <div class="min-h-screen flex flex-col items-center py-8">
              <h1 class="text-2xl font-bold mb-6">Patient Input Form</h1>
              <form class="w-full max-w-3xl bg-white p-6 rounded shadow">
                <!-- General Information -->
                <section class="mb-6">
                  <h2 class="text-xl font-semibold mb-4">General Information</h2>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                      <label for="name" class="block text-sm font-medium">Patient Name</label>
                      <input
                        type="text"
                        id="name"
                        name="name"
                        class="mt-1 block w-full p-2 border rounded"
                        placeholder="Enter patient name"
                      />
                    </div>
                    <div>
                      <label for="age" class="block text-sm font-medium">Age</label>
                      <input
                        type="number"
                        id="age"
                        name="age"
                        class="mt-1 block w-full p-2 border rounded"
                        placeholder="Enter patient age"
                      />
                    </div>
                    <div>
                      <label for="gender" class="block text-sm font-medium">Gender</label>
                      <select
                        id="gender"
                        name="gender"
                        class="mt-1 block w-full p-2 border rounded"
                      >
                        <option value="">Select gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                      </select>
                    </div>
                    <div>
                      <label for="contact" class="block text-sm font-medium">Contact Number</label>
                      <input
                        type="text"
                        id="contact"
                        name="contact"
                        class="mt-1 block w-full p-2 border rounded"
                        placeholder="Enter contact number"
                      />
                    </div>
                  </div>
                </section>

                <!-- Odontogram -->
                <section class="mb-6">
                  <h2 class="text-xl font-semibold mb-4">Odontogram</h2>
                  <div class="border rounded p-4 bg-gray-50">
                    <p class="text-gray-600">Interactive odontogram will be displayed here.</p>
                    <!-- Placeholder for the odontogram UI -->
                  </div>
                </section>
  
                  <script>
                    // Inisialisasi odontogram pada canvas
                    $(document).ready(function () {
                        $("#odontogram").odontogram('init', {
                            width: "900px",
                            height: "420px"
                        });

                        // Contoh data geometri untuk menandai beberapa gigi
                        $("#odontogram").odontogram('setGeometryByPos', [
                            { code: 'AMF', pos: '18-R' },
                            { code: 'CARIES', pos: '83-M' },
                            { code: 'POC', pos: '84' },
                        ]);

                        // Event Listener untuk mencetak perubahan geometri
                        $('#odontogram').on('change', function (_, geometry) {
                            console.log('Geometry Updated:', geometry);
                        });
                    });
                  </script>
                </section>


                <!-- New section for other dental conditions -->
                <section class="mb-6">
                  <h2 class="text-xl font-semibold mb-4">Dental Conditions</h2>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                      <label for="occlusion" class="block text-sm font-medium">Occlusion</label>
                      <input
                        type="text"
                        id="occlusion"
                        name="occlusion"
                        class="mt-1 block w-full p-2 border rounded"
                        placeholder="Enter occlusion"
                      />
                    </div>
                    <div>
                      <label for="torus_palatinus" class="block text-sm font-medium">Torus Palatinus</label>
                      <input
                        type="text"
                        id="torus_palatinus"
                        name="torus_palatinus"
                        class="mt-1 block w-full p-2 border rounded"
                        placeholder="Enter torus palatinus"
                      />
                    </div>
                    <div>
                      <label for="torus_mandibularis" class="block text-sm font-medium">Torus Mandibularis</label>
                      <input
                        type="text"
                        id="torus_mandibularis"
                        name="torus_mandibularis"
                        class="mt-1 block w-full p-2 border rounded"
                        placeholder="Enter torus mandibularis"
                      />
                    </div>
                    <div>
                      <label for="supernumerary" class="block text-sm font-medium">Supernumerary Teeth</label>
                      <input
                        type="text"
                        id="supernumerary"
                        name="supernumerary"
                        class="mt-1 block w-full p-2 border rounded"
                        placeholder="Enter supernumerary teeth"
                      />
                    </div>
                    <div>
                      <label for="diastema" class="block text-sm font-medium">Diastema</label>
                      <input
                        type="text"
                        id="diastema"
                        name="diastema"
                        class="mt-1 block w-full p-2 border rounded"
                        placeholder="Enter diastema"
                      />
                    </div>
                    <div>
                      <label for="other_anomalies" class="block text-sm font-medium">Other Anomalies</label>
                      <input
                        type="text"
                        id="other_anomalies"
                        name="other_anomalies"
                        class="mt-1 block w-full p-2 border rounded"
                        placeholder="Enter any other anomalies"
                      />
                    </div>
                  </div>
                </section>

                <!-- Doctor's Notes -->
                <section>
                  <h2 class="text-xl font-semibold mb-4">Doctor's Notes</h2>
                  <textarea
                    id="doctor_notes"
                    name="doctor_notes"
                    rows="4"
                    class="mt-1 block w-full p-2 border rounded"
                    placeholder="Enter any additional notes here"
                  ></textarea>
                </section>
  
                <div class="mt-6 flex justify-end">
                  <button type="submit" class="px-6 py-3 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                    Submit
                  </button>
                </div>
              </form>
            </div>
        </body>
      </div>
    </main>
  </div>
</body>
</html>
