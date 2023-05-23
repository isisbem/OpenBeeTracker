<?php
require_once '../utils/base.php';
?>

<head>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>

<body>
  <main>
    <!-- division -->
    <div class="grid grid-cols-2 grid-rows-2 gap-2 text-center min-h-screen h-full mt-2">
      <div id="first" class="border-2 border-neutral-300 shadow-2xl bg-white rounded-lg"></div>
      <div id="second" class="border-2 border-neutral-300 shadow-2xl bg-white rounded-lg"></div>
      <div id="third" class="border-2 border-neutral-300 shadow-2xl bg-white rounded-lg"></div>
      <!-- TABLE -->
      <div class="border-2 border-neutral-300 pt-3 shadow-2xl bg-white rounded-lg">
        <section class="container px-4 mx-auto">
          <div class="flex flex-col">
              <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                  <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                      <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                          <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                              <thead class="bg-gray-50 dark:bg-gray-800">
                                  <tr>
                                      <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                          <div class="flex items-center gap-x-3">
                                            <span>Id Ape</span>
                                          </div>
                                      </th>
      
                                      <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                          Data-Ora-Giorno
                                      </th>
      
                                      <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                          Entrata
                                      </th>
      
                                      <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                          Uscita
                                      </th>
      
                                      <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                          Durata
                                      </th>
                                  </tr>
                              </thead>
                              <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                  <tr>
                                      <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                          <div class="inline-flex items-center gap-x-3">
                                              <span>#3066</span>
                                          </div>
                                      </td>
                                      <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Jan 6, 2022</td>
                                      <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                          <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                              <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                              </svg>
                                              <h2 class="text-sm font-normal">Dentro</h2>
                                          </div>
                                      </td>
                                      <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                          <div class="flex items-center gap-x-2">
                                          </div>
                                      </td>
                                      <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">TEXT</td>
                                  </tr>
      
                                  <tr>
                                      <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                          <div class="inline-flex items-center gap-x-3">
                                              <span>#3065</span>
                                          </div>
                                      </td>
                                      <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Jan 5, 2022</td>
                                      <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                          <div class="inline-flex items-center px-3 py-1 text-red-500 rounded-full gap-x-2 bg-red-100/60 dark:bg-gray-800">
                                              <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M9 3L3 9M3 3L9 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                              </svg>
      
                                              <h2 class="text-sm font-normal">Fuori</h2>
                                          </div>
                                      </td>
                                      <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                          <div class="flex items-center gap-x-2 bg-black">
                                          </div>
                                      </td>
                                      <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">TEXT</td>
                                  </tr>
      
                                  <tr>
                                      <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                          <div class="inline-flex items-center gap-x-3">
                                              <span>#3064</span>
                                          </div>
                                      </td>
                                      <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Jan 5, 2022</td>
                                      <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                          <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                              <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                              </svg>
      
                                              <h2 class="text-sm font-normal">Dentro</h2>
                                          </div>
                                      </td>
                                      <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                          <div class="flex items-center gap-x-2">
                                          </div>
                                      </td>
                                      <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">TEXT</td>
                                  </tr>
      
                                  <tr>
                                      <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                          <div class="inline-flex items-center gap-x-3">
                                              <span>#3063</span>
                                          </div>
                                      </td>
                                      <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Jan 4, 2022</td>
                                      <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                          <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                              <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                              </svg>
      
                                              <h2 class="text-sm font-normal">Dentro</h2>
                                          </div>
                                      </td>
                                      <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                          <div class="flex items-center gap-x-2">
                                          </div>
                                      </td>
                                      <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">TEXT</td>
                                  </tr>
      
                                  <tr>
                                      <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                          <div class="inline-flex items-center gap-x-3">
                                              <span>#3062</span>
                                          </div>
                                      </td>
                                      <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Jan 4, 2022</td>
                                      <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                          <div class="inline-flex items-center px-3 py-1 text-gray-500 rounded-full gap-x-2 bg-gray-100/60 dark:bg-gray-800">
                                              <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M4.5 7L2 4.5M2 4.5L4.5 2M2 4.5H8C8.53043 4.5 9.03914 4.71071 9.41421 5.08579C9.78929 5.46086 10 5.96957 10 6.5V10" stroke="#667085" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                              </svg>
      
                                              <h2 class="text-sm font-normal">Null</h2>
                                          </div>
                                      </td>
                                      <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                          <div class="flex items-center gap-x-2">
                                          </div>
                                      </td>
                                      <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">TEXT</td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      
          <div class="flex items-center justify-between mt-6">
              <a href="#" class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                  </svg>
      
                  <span>
                      previous
                  </span>
              </a>
      
          <!--   <div class="items-center hidden md:flex gap-x-3">
                  <a href="#" class="px-2 py-1 text-sm text-blue-500 rounded-md dark:bg-gray-800 bg-blue-100/60">1</a>
                  <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">2</a>
                  <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">3</a>
                  <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">...</a>
                  <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">12</a>
                  <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">13</a>
                  <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">14</a>
              </div>
      -->
              <a href="#" class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
                  <span>
                      Next
                  </span>
      
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                  </svg>
              </a>
          </div>
      </section>
      </div>
    </div>
    <!--<div class="space-x-5 mt-5 flex">
      <template x-data x-for="i in 3">
        <div class="p-5 bg-neutral-100 flex-1 border border-neutral-200 rounded-lg">
          <h4 class="text-lg text-neutral-400">Lorem Ipsum</h4>
          <h1 class="text-3xl font-bold">10</h1>
        </div>
      </template>
    </div>-->
    <script>
      var optionsPie = {
        chart: {
          type: 'pie'
        },
        plotOptions: {
          pie: {
            customScale: 0.5 
          }
        },
        series: [44, 55, 13, 33],
        labels: ['Apple', 'Mango', 'Orange', 'Watermelon']
      }
      var optionsRadar = {
        chart: {
          type: 'radar'
        },
        fill: {
          opacity: 0.4,
        },
        series: [
          {
            name: "Radar Series 1",
            data: [45, 52, 38, 24, 33, 10]
          },
          {
            name: "Radar Series 2",
            data: [26, 21, 20, 6, 8, 15]
          }
        ],
        labels: ['April', 'May', 'June', 'July', 'August', 'September']
      }

      var optionsIsto = {
        chart: {
          type: 'bar'
        },
        plotOptions: {
          bar: {
            distributed: true,
            borderRadius: 15
          }
        },
        series: [{
          data: [{
            x: 'category A',
            y: 10
          }, {
            x: 'category B',
            y: 18
          }, {
            x: 'category C',
            y: 13
          }, {
            x: 'category D',
            y: 18
          },]
        }]
      }
      
      var pie = new ApexCharts(document.getElementById('first'), optionsPie);
      pie.render();
      
      var radar = new ApexCharts(document.getElementById('second'), optionsRadar);
      radar.render();

      var isto = new ApexCharts(document.getElementById('third'), optionsIsto);
      isto.render();
    </script>
  </main>
</body>