<header
  class="bg-primary flex krona text-3xl justify-between px-7 py-4.5 items-center text-white md:hidden">
  <img
    id="home-btn"
    class="size-12 cursor-pointer"
    src="../assets/icons/school-icon.svg"
    alt="" />

  <h1 id="home-btn" class="cursor-pointer">MyRi Clinic</h1>
  <img
    id="menu-btn"
    class="z-21 size-9 cursor-pointer invert"
    src="../assets/icons/menu-icon.svg"
    alt="menu-btn" />
</header>

<nav
  id="SideBar"
  class="z-20 w-62 md:sm:w-24 lg:w-72 md:h-dvh xl:lg:w-82 translate-x-[50rem]  drop-shadow-2xl md:drop-shadow-none h-dvh md:translate-x-0 fixed duration-500 right-0 top-[-17px] md:top-0 md:left-0 md:block">
  <main
    class="grid text-white h-[70%] grid-rows-[100px_1fr_60px] md:h-dvh ">
    <section
      class="row-start-1 invisible md:visible cursor-pointer shadow-2xl bg-secondary flex items-center justify-center text-2xl krona">
      <img
        class="md:block size-12 lg:hidden"
        src="../assets/icons/school-icon.svg"
        alt="school-img" />
      <h1 class="md:hidden text-3xl lg:block">MyRi Clinic</h1>
    </section>

    <!-- navlinks -->
    <section
      class="poppins uppercase row-start-2 bg-primary flex gap-y-3 flex-col  px-3 py-4 text-lg">
      <!-- visitor link -->
      <a
        class="flex gap-x-4 px-3.5 py-3.5 leading-6 hover:bg-[#ffffff1f] rounded-lg md:flex md:justify-center lg:justify-start"
        href="../pages/Clinic-Patient.php"><img src="../assets/icons/visit-icon.svg" alt="visitor-icon" />
        <p class="md:hidden lg:block">Clinic Patient</p>
      </a>

      <!-- current patientn in clinic link -->
      <a
        class="flex gap-x-4 px-3.5 py-3.5 leading-6 hover:bg-[#ffffff1f] rounded-lg md:flex md:justify-center lg:justify-start"
        href="../pages/Current-Patients.php"><img src="../assets/icons/inside-icon.svg" alt="visitor-icon" />
        <p class="md:hidden lg:block">Current Patients</p>
      </a>

      <!-- visit history -->
      <a
        class="flex gap-x-4 px-3.5 py-3.5 leading-6 hover:bg-[#ffffff1f] rounded-lg md:flex md:justify-center lg:justify-start"
        href="../pages/Patient-History.php"><img src="../assets/icons/history-icon.svg" alt="history-icon" />
        <p class="md:hidden lg:block">visitor history</p>
      </a>
      <!-- medical forn  -->
      <a
        class="flex gap-x-4 px-3.5 py-3.5 leading-6 hover:bg-[#ffffff1f] rounded-lg md:flex md:justify-center lg:justify-start"
        href="../pages/medicalform.php"><img src="../assets/icons/medicalform-icon.svg" alt="inforamation-icon" />
        <p class="md:hidden lg:block">medical form</p>
      </a>
      <!-- student info -->
      <a
        class="flex gap-x-4 px-3.5 py-3.5 leading-6 hover:bg-[#ffffff1f] rounded-lg md:flex md:justify-center lg:justify-start"
        href="../pages/studentlist.php"><img src="../assets/icons/student-icon.svg" alt="inforamation-icon" />
        <p class="md:hidden lg:block">student list</p>
      </a>

      <!-- student info -->


      <a
        class="flex gap-x-4 px-3.5 py-3.5 leading-6 hover:bg-[#ffffff1f] rounded-lg md:flex md:justify-center lg:justify-start"
        href="../pages/inventory.php"><img src="../assets/icons/inventory-icon.svg" alt="inforamation-icon" />
        <p class="md:hidden lg:block">Inventory</p>
      </a>


      <section class="mt-auto">

        <hr class="text-[#f5f5f565]  w-full">
        <a
          class="flex gap-x-4 px-3.5 py-3.5 leading-6 rounded-lg md:flex md:justify-center lg:justify-start mt-3 hover:bg-[#ffffff1f]"
          href="">
          <img src="../assets/icons/user-icon.svg" alt="visitor-icon" />
          <p class="md:hidden lg:block">Admin</p>
        </a>
      </section>
    </section>



    <section
      class="rounded-bl-2xl md:rounded-none row-start-3 bg-secondary poppins uppercase px-5 py-3.5 flex text-lg w-full items-center gap-x-5">

      <!-- logout -->
      <form action="../../Controller/logout.php" method="POST">
        <button
          id="logout-btn"
          type="submit"
          name="submit"
          class="flex gap-x-4 px-3.5 py-3.5 leading-6 rounded-lg md:flex md:justify-center lg:justify-start"
          href="../pages/index.php"><img src="../assets/icons/exit-icon.svg" alt="inforamation-icon" />
          <p class="md:hidden lg:block">logout</p>
        </button>
      </form>
    </section>
  </main>
</nav>
<script src="../script/scriptnavbar.js"></script>