<nav class="flex px-5 py-3 text-gray-700 border-2 border-blue-400 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
      <li class="inline-flex items-center">
        <a href="{{ route('create.pt.1') }}" class="inline-flex items-center text-sm font-medium
        {{ request()->is('admin/form/perguruan-tinggi/step-1') ? 'text-blue-500' : 'text-gray-700' }} hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
          Step 1
        </a>
      </li>
      <li>
        <div class="flex items-center">
          <svg class="rtl:rotate-180 block w-3 h-3 mx-1 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
          </svg>
          <a href="{{ route('create.pt.2') }}" class="ms-1 text-sm font-medium
          {{ request()->is('admin/form/perguruan-tinggi/step-2') ? 'text-blue-500' : 'text-gray-700' }} hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">
            Step 2
          </a>
        </div>
      </li>
      <li aria-current="page">
        <div class="flex items-center">
          <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
          </svg>
          <a href="{{ route('create.pt.3') }}" class="ms-1 text-sm font-medium
          {{ request()->is('admin/form/perguruan-tinggi/step-3') ? 'text-blue-500' : 'text-gray-700' }} hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">
            Step 3
          </a>
        </div>
      </li>
    </ol>
</nav>
