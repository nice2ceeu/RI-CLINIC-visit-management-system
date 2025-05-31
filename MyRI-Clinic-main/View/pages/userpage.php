<?php
include('../components/body.php');
?>


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
      <section class="mt-auto ">

        <hr class="text-[#f5f5f565]  w-full">
        <a
          class="flex gap-x-4 px-3.5 py-3.5 leading-6 rounded-lg md:flex md:justify-center lg:justify-start mt-3 hover:bg-[#ffffff1f]"
          href="../pages/userprofile.php">
          <img src="../assets/icons/user-icon.svg" alt="visitor-icon" />
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

<section class="md:sm:ml-24 lg:ml-72 md:h-dvh xl:lg:ml-82">

  <section class="relative py-7.5 pt-12">
    <h1 class="krona uppercase bg-white lg:ml-12 px-5 inline z-20 text-3xl">
      Israel Wembyawa
    </h1>
    <hr class="absolute z-[-1] w-full top-17" />
  </section>

  <section class="relative py-7.5 pt-12">
    <h1 class="krona uppercase bg-white lg:ml-12 px-5 inline z-20 text-3xl">
      STUDENT MEDICAL FORM
    </h1>
    <hr class="absolute z-[-1] w-full top-17" />
  </section>

  <form action="../../Controller/update.php" method="POST" class="">
    <section
      class="poppins flex flex-wrap px-3 uppercase [&>section]:basis-52 md:[&>section]:mx-0 [&>section]:mx-auto md:gap-5 gap-y-7">
      <!-- fullname -->
      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          id="new__fullname">full name</label>
        <input
          id="new_fullname"
          name="new_fullname"
          value="<?= $fullname ?>"
          class="border-1 border-black py-2.5 w-full px-4.5 rounded-lg text-[#808080b0]"
          type="text"
          required
          disabled />
      </section>
      <!-- grade and section -->
      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="sdasadf.grade">Grade & section</label>
        <input
          id="new_grade"
          name="new_grade"
          value="<?= $grade_section ?>"
          class="border-1 border-black py-2.5 w-full px-4.5 rounded-lg text-[#808080b0]"
          type="text"
          required
          disabled />
      </section>

      <!-- birthday -->
      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="new_birthday">birthday</label>
        <input
          id="new_birthday"
          name="new_birthday"
          class="border-1 border-black py-2.5 w-full px-4.5 rounded-lg text-[#808080b0]"
          type="date"
          value="<?= $birthdate ?>"
          required
          disabled />
      </section>

      <!-- age -->
      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="asdfage">age</label>
        <input
          id="new_age"
          name="new_age"
          value="<?= $age ?>"
          class="border-1 border-black py-2.5 w-full px-4.5 rounded-lg text-[#808080b0]"
          type="number"
          required
          disabled />
        <!-- HEIGHT ( FEET / INCHES ) -->
      </section>

      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="new_gender">gender</label>
        <input
          id="new_gender"
          name="new_gender"
          class="border-1 border-black py-2.5 w-full px-4.5 rounded-lg text-[#808080b0]"
          type="text"
          required
          value="<?= $gender ?>"
          disabled />
      </section>


      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="new_height">HEIGHT ( CM )</label>
        <input
          id="new_height"
          name="new_height"
          value="<?= $height ?>"
          class="border-1 border-black py-2.5 w-full px-4.5 rounded-lg text-[#808080b0]"
          type="number"
          required
          disabled />
      </section>
      <!-- WEIGHT ( kg ) -->
      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="weight">WEIGHT ( kg )</label>
        <input
          id="new_weight"
          name="new_weight"
          value="<?= $weight ?>"
          class="border-1 border-black py-2.5 w-full px-4.5 rounded-lg text-[#808080b0]"
          type="number"
          required
          disabled />
      </section>

      <!-- address -->
      <!--  -->

      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="new_address">address</label>
        <input
          id="new_address"
          name="new_address"
          value="<?= $address ?>"
          class="border-1 border-black py-2.5 w-full px-4.5 rounded-lg text-[#808080b0]"
          type="text"
          required
          disabled />
      </section>

      <!-- parent guardian -->
      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="new_parent">parent / guardian</label>
        <input
          id="new_parent"
          name="new_parent"
          value="<?= $parent ?>"
          class="border-1 border-black py-2.5 w-full px-4.5 rounded-lg text-[#808080b0]"
          type="text"
          required
          disabled />
      </section>

      <!-- contact -->
      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="new_number">contact no#</label>
        <input
          id="new_number"
          name="new_number"
          value="<?= $contact ?>"
          class="border-1 border-black py-2.5 w-full px-4.5 rounded-lg text-[#808080b0]"
          type="text"
          required
          disabled />
      </section>
    </section>
    <!--  -->
    <!--  -->
    <!--  -->
    <!--  -->
    <!-- STUDENT MEDICAL HISTORY -->
    <section class="relative py-7.5 pt-12">
      <h1 class="krona uppercase bg-white lg:ml-12 px-5 inline z-20 md:text-lg">
        STUDENT MEDICAL HISTORY
      </h1>
      <hr class="absolute z-[-1] w-full top-15" />
    </section>
    <!--  -->
    <!--  -->
    <!--  -->
    <!--  -->
    <section
      class="poppins flex items-center flex-col uppercase gap-y-5 pb-5 [&>section]:p-5 border-b-1 [&>section]:leading-3 md:justify-evenly md:flex-row">
      <section
        class="[&>article]:flex [&>article]:flex-col [&>article]:gap-y-3 [&>article]:items-center flex gap-5 md:col-start-1">
        <!-- asthma -->
        <h1 class="font-semibold">asthma</h1>
        <article class="">
          <label for="yes">yes</label>
          <input class="size-5" id="new_asthma_yes" name="asthma" type="radio" value="yes" disabled required />
        </article>
        <article>
          <label for="new_asthma_no">no</label>
          <input
            class="size-5"
            id="new_asthma_no"
            name="asthma"
            type="radio"
            value="no"
            checked
            disabled required />
        </article>
        <article>
          <label for="mild">mild</label>
          <input class="size-5" id="new_asthma_mild" name="asthma" value="mild" type="radio" disabled required />
        </article>
        <article>
          <label for="moderate">moderate</label>
          <input
            class="size-5"
            class="size-5"
            id="new_asthma_moderate"
            value="moderate"
            name="asthma"
            type="radio"
            disabled required />
        </article>
        <article>
          <label for="severe">severe</label>
          <input class="size-5" id="new_asthma_severe" type="radio" value="severe" name="asthma" disabled required />
        </article>
      </section>

      <div class="hidden md:block border-l-1 h-32"></div>

      <!-- EPILEPSY -->
      <section
        class="[&>article]:flex [&>article]:flex-col [&>article]:gap-y-3 [&>article]:items-center flex gap-5 md:col-start-1">
        <h1 class="font-semibold">EPILEPSY</h1>
        <article class="">
          <label for="yes">yes</label>
          <input class="size-5" id="new_epilepsy_yes" type="radio" value="yes" name="epilepsy" disabled required />
        </article>
        <article>
          <label for="no">no</label>
          <input class="size-5" id="new_epilepsy_no" type="radio" value="no" name="epilepsy" disabled required />
        </article>
        <article>
          <label for="mild">mild</label>
          <input class="size-5" id="new_epilepsy_mild" type="radio" value="mild" name="epilepsy" disabled required />
        </article>
        <article>
          <label for="moderate">moderate</label>
          <input class="size-5" id="new_epilepsy_moderate" type="radio" value="moderate" name="epilepsy" disabled required />
        </article>
        <article>
          <label for="severe">severe</label>
          <input class="size-5" id="new_epilepsy_severe" type="radio" value="severe" name="epilepsy" disabled required />
        </article>
      </section>
    </section>
    <section class="space-y-5 poppins uppercase p-5">
      <article class="flex items-center gap-5">
        <h1 class="font-semibold">food ALLERGIES</h1>
        <article class="flex items-center space-x-2.5">
          <label for="new_food_allergies_yes">yes</label>
          <input
            class="size-4.5"
            id="new_food_allergies_yes"
            type="radio"
            checked
            value="yes"
            name="food"
            disabled required />
          <label for="new_food_allergies_no">no</label>
          <input
            class="size-4.5"
            id="new_food_allergies_no"
            type="radio"
            value="no"
            name="food"
            disabled required />
        </article>
      </article>

      <article>
        <input
          id="new_food_allergic"
          name="new_food_allergic"
          value="<?= $foodcause ?>"
          class="border-b-1 focus:outline-0 py-3 text-[#808080b0] uppercase w-full"
          placeholder="TYPE IF STUDENT HAVE FOOD ALLERGIES / LIST FOODS ALLERGIC REACTION"
          type="text"
          disabled required />
      </article>
    </section>

    <section class="space-y-5 poppins uppercase p-5">
      <article class="flex gap-5">
        <h1 class="font-semibold">life-threatening insect allergy</h1>
        <article class="flex items-center space-x-2.5">
          <label for="yes">yes</label>
          <input
            class="size-4.5"
            id="new_insect_allergy_yes"
            type="radio"
            name="insect"
            value="yes"
            disabled required />
          <label for="no">no</label>
          <input
            class="size-4.5"
            id="new_insect_allergy_no"
            value="no"
            type="radio"
            name="insect"
            disabled required />
        </article>
      </article>

      <article>
        <input
          class="border-b-1 uppercase text-[#808080b0] focus:outline-0 py-3 w-full"
          value="<?= $insectcause ?>"
          placeholder="IF STUDENT ALLERGIC TO INSECTS BITES, PLEASE LIST INSECTS"
          id="new_insect_bites"
          name="new_insect_bites"
          type="text"
          disabled required />
      </article>
      <input type="hidden" name="id" value="<?= $id ?>">


  </form>
</section>

<script src="../script/scriptnavbar.js"></script>
</body>

</html>