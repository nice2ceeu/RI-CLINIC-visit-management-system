<?php
include('../components/body.php');
?>

<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

<!-- navvvvvvvvvvv -->
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
            <!-- studnet info -->
            <a
                class="flex gap-x-4 px-3.5 py-3.5 leading-6 bg-[#ffffff1f] rounded-lg md:flex md:justify-center lg:justify-start"
                href="../pages/userpage.php">
                <img src="../assets/icons/stud-info-icon.svg" alt="visitor-icon" />
                <p class="md:hidden lg:block">student inforamation</p>
            </a>
            <section class="mt-auto">

                <hr class="text-[#f5f5f565]  w-full">
                <a
                    class="flex gap-x-4 px-3.5 py-3.5 leading-6 rounded-lg md:flex md:justify-center lg:justify-start mt-3 hover:bg-[#ffffff1f]"
                    href="../pages/userprofile.php">
                    <img src="../assets/icons/user-icon.svg" alt="user-icon" />
                    <p class="md:hidden lg:block">Israel Wembyawa</p>
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
                    class="flex gap-x-4 px-3.5 py-3.5 leading-6 rounded-lg md:flex md:justify-center lg:justify-start cursor-pointer"
                    href="../pages/index.php"><img src="../assets/icons/exit-icon.svg" alt="inforamation-icon" />
                    <p class="md:hidden lg:block">logout</p>
                </button>
            </form>
        </section>
    </main>
</nav>
<!-- navvvvvvvvvvv -->

<main class="md:sm:ml-24 lg:ml-72 md:h-dvh xl:lg:ml-82 overflow-hidden ">

    <section class="relative flex  flex-col">

        <img src="../public/ri-img.png" class="h-62 object-cover w-full" alt="">
        <img src="../assets/icons/user-icon.svg" class="invert absolute top-50  size-36 w-full" alt="user-icon" />
        <h1 class="px-5 absolute top-10 before:content-['Number_of_visits:_'] krona">10</h1>
        <hr class="w-full">
        <section class="w-full absolute top-100 text-center text-7xl poppins mt-10">

            <hr class="w-full text-[#e6e6f89d]">
            <h1>Israel Wembyawa</h1>



        </section>
        <div class="bg-gradient-to-b from-[#edf3f2] to-[#1f2cb9] h-dvh w-full opacity-50 z-[-19]"></div>

    </section>
</main>

<script src="../script/scriptnavbar.js"></script>
</body>

</html>