<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: index.php");
  exit();
}
?>
<?php
include('../components/body.php');
include('../components/navbar.php');
?>
<section

  class="md:sm:ml-24 lg:ml-72 md:h-dvh xl:lg:ml-82">
  <section class="relative py-7.5 pt-12">
    <h1 class="krona uppercase bg-white ml-12 px-5 inline z-20 text-4xl">
      Clinic Patient
    </h1>
    <hr class="absolute z-[-1] w-full top-17" />
  </section>


  <!-- visitor form  -->
  <form
    action="../../Controller/addvisitor.php"
    method="POST"
    class="px-8.5 gap-3.5 uppercase flex justify-center flex-wrap lg:flex-nowrap min-[200px]:w-[90%]">

    <!-- name of student  -->

    <section class="relative w-2/5 grow-1">
      <label
        id="label"
        class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
        for="name">name of student</label>

      <input
        id="name"
        class="border-1 py-2.5 w-full px-4.5 rounded-lg"
        name="fullName"
        type="text" />

    </section>

    <!-- Grade and section  -->

    <section class="relative w-2/5 grow-1">
      <label
        id="label"
        class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
        for="gradeSection">grade and section</label>

      <input
        id="gradeSection"
        class="border-1 py-2.5 w-full px-4.5 rounded-lg"
        name="gradeSection"
        type="text" />

    </section>


    <!-- complaint of student  -->
    <section class="relative w-2/5 grow-1">
      <label
        id="label"
        class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
        for="complaint">complaint</label>

      <input
        id="complaint"
        class="border-1 py-2.5 w-full px-4.5 rounded-lg"
        name="complaint"
        type="text" />

    </section>

    <!-- treatment for student  -->
    <section class="relative w-2/5 grow-1">
      <label
        id="label"
        class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
        for="name">Treatment</label>

      <input
        id="name"
        class="border-1 py-2.5 w-full px-4.5 rounded-lg"
        name="fullname"
        type="text" />
    </section>
    <!-- submit button  -->
    <section
      class="poppins text-white bg-primary rounded-lg relative cursor-pointer">
      <button
        action="submit"
        name="submit"
        class="uppercase w-full py-2.5 px-9 flex gap-5 items-center justify-evenly cursor-pointer">
        <p>submit</p>
        <img clas src="../assets/icons/check-icon.svg" alt="" />
      </button>
    </section>
  </form>

  <!--  -->
  <!--  -->
  <section class="relative py-7.5 mt-5">
    <hr class="absolute z-[-1] w-full bottom-0" />
  </section>
  <!--  -->
  <!--  -->
  <!-- visitor list components >>>>>>>>> -->
  <?php
  include('../components/patientlist.php')
  ?>
</section>
</body>

</html>