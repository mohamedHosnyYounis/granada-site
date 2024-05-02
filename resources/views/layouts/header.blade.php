<header class="font-JF">
    <div class="bg-granada-betrolum w-full h-24">
      <nav class="w-11/12 bg-granada-betrolum border-gray-200 flex items-center justify-between mx-auto p-4">
         <div>
          <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{asset('storage/assets/images/logo.png')}}" class="h-16" alt="" />
          </a>
         </div>
         <div>
          <button type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-gray-500" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:flex  md:w-auto " id="navbar-default">
            <ul class="flex flex-col p-4 md:p-0 mt-4 border text-white font-semibold md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-granada-betrolum  ">
              <li>
                <a href="{{ route('page.show',['name'=>'home']) }}" class="block py-2 px-3 rounded md:bg-transparent text-granada-betrolum-light font-bold md:p-0 " aria-current="page">الرئيسية</a>
              </li>
              <li>
                <a href="{{ route('page.show',['name'=>'departments']) }}" class="block py-2 px-3  rounded  md:hover:bg-transparent md:border-0 hover:text-granada-betrolum-light hover:font-bold md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">الاقسام والقطاعات</a>
              </li>
              <li>
                <a href="{{ route('page2.show',['depart'=>'about-us']) }}" class="block py-2 px-3  rounded  md:hover:bg-transparent md:border-0 hover:text-granada-betrolum-light hover:font-bold md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">من نحن</a>
              </li>
              <li>
                <a href="{{ route('page4.show',['servicess'=>'services']) }}" class="block py-2 px-3  rounded  md:hover:bg-transparent md:border-0 hover:text-granada-betrolum-light hover:font-bold md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">خدماتنا</a>
              </li>
              <li>
                <a href="{{ route('page3.show',['serve'=>'works']) }}" class="block py-2 px-3 rounded  md:hover:bg-transparent md:border-0 hover:text-granada-betrolum-light hover:font-bold md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">اعمالنا</a>
              </li>
            </ul>
        </div>
      </div>
      <div>
        <button class="border-[1.6px] hover:bg-granada-betrolum-warm text-white text-base hover:transition-colors duration-500 w-40 h-10 rounded-md">تواصل معنا</button>
      </div>
      </nav> 
    </div>
</header>
@yield('home_slider')
