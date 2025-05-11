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


<?php
include("../../config/database.php");

if (isset($_POST['submit'])) {
  $id = $_POST['id'];

  $stmt = $conn->prepare("SELECT * FROM medicalform WHERE id = ?");
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $fullname = htmlspecialchars($row['fullname']);
    $grade_section = htmlspecialchars($row['grade_section']);
    $birthdate = htmlspecialchars($row['birthdate']);
    $age = htmlspecialchars($row['age']);
    $gender = htmlspecialchars($row['gender']);
    $height = htmlspecialchars($row['height']);
    $weight = htmlspecialchars($row['_weight']);
    $address = htmlspecialchars($row['_address']);
    $parent = htmlspecialchars($row['parent']);
    $contact = htmlspecialchars($row['contact']);
    $asthma = htmlspecialchars($row['asthma']);
    $epilepsy = htmlspecialchars($row['epilepsy']);
    $food = htmlspecialchars($row['food']);
    $foodcause = htmlspecialchars($row['foodcause']);
    $insect = htmlspecialchars($row['insect']);
    $insectcause = htmlspecialchars($row['insectcause']);
  }
}
?>

<section class="md:sm:ml-24 lg:ml-72 md:h-dvh xl:lg:ml-82">
  <section class="relative py-7.5 pt-12">
    <h1 class="krona uppercase bg-white lg:ml-12 px-5 inline z-20 text-3xl">
      Medical form
    </h1>
    <hr class="absolute z-[-1] w-full top-17" />
  </section>



  <!--  -->
  <!--  -->
  <!--  -->
  <!--  -->
  <!-- value of medical form for form for updating the old gods ........ -->

  <form action="../../Controller/update.php" method="POST">
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
          <input class="size-5" id="new_asthma_yes" name="asthma" type="radio" value="yes" disabled required/>
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
            disabled required/>
        </article>
        <article>
          <label for="mild">mild</label>
          <input class="size-5" id="new_asthma_mild" name="asthma" value="mild" type="radio" disabled required/>
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
            disabled required/>
        </article>
        <article>
          <label for="severe">severe</label>
          <input class="size-5" id="new_asthma_severe" type="radio" value="severe" name="asthma" disabled required/>
        </article>
      </section>

      <div class="hidden md:block border-l-1 h-32"></div>

      <!-- EPILEPSY -->
      <section
        class="[&>article]:flex [&>article]:flex-col [&>article]:gap-y-3 [&>article]:items-center flex gap-5 md:col-start-1">
        <h1 class="font-semibold">EPILEPSY</h1>
        <article class="">
          <label for="yes">yes</label>
          <input class="size-5" id="new_epilepsy_yes" type="radio" value="yes" name="epilepsy" disabled required/>
        </article>
        <article>
          <label for="no">no</label>
          <input class="size-5" id="new_epilepsy_no" type="radio" value="no" name="epilepsy" disabled required/>
        </article>
        <article>
          <label for="mild">mild</label>
          <input class="size-5" id="new_epilepsy_mild" type="radio" value="mild" name="epilepsy" disabled required/>
        </article>
        <article>
          <label for="moderate">moderate</label>
          <input class="size-5" id="new_epilepsy_moderate" type="radio" value="moderate" name="epilepsy" disabled required/>
        </article>
        <article>
          <label for="severe">severe</label>
          <input class="size-5" id="new_epilepsy_severe" type="radio" value="severe"  name="epilepsy" disabled required/>
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
            disabled required/>
          <label for="new_food_allergies_no">no</label>
          <input
            class="size-4.5"
            id="new_food_allergies_no"
            type="radio"
            value="no"
            name="food"
            disabled required/>
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
          disabled required/>
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
            disabled required/>
          <label for="no">no</label>
          <input
            class="size-4.5"
            id="new_insect_allergy_no"
            value="no"
            type="radio"
            name="insect"
            disabled required/>
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
          disabled required/>
      </article>
      <input type="hidden" name="id" value="<?= $id ?>">

      <button

        id="save_mode"
        name="save_mode"
        class="poppins border-1 custom-hover hover:bg-[#06118e] place-self-center uppercase mt-5 justify-center cursor-pointer px-5 py-3 flex gap-x-3 rounded-lg">
        <p>save edit</p>
        <img

          src="../assets/icons/check-icon.svg"
          alt="check-icon" />
      </button>
  </form>
</section>

<section class="flex place-content-center ">

  <button
    id="edit_mode"
    class="poppins border-1 custom-hover hover:bg-[#06118e] place-self-center uppercase mt-5 justify-center cursor-pointer px-5 py-3 flex gap-x-3 rounded-lg">
    <p>edit form</p>
    <img
      class="invert size-5"
      src="../assets/icons/edit-icon.svg"
      alt="check-icon" />
  </button>
  <!-- editing mode section -->




  <button
    id="cancel_mode"
    class="bg-[#fb4949] poppins place-self-center uppercase mt-5 justify-center cursor-pointer text-white px-5 py-3 flex gap-x-3 rounded-lg">
    <p>cancel edit</p>
    <img src="../assets/icons/delete-icon.svg" alt="check-icon" />
  </button>


</section>

</section>
<script>
  const food = <?= json_encode($food) ?>;
  const insect = <?= json_encode($insect) ?>;
  const asthma = <?= json_encode($asthma) ?>;
  const epilepsy = <?= json_encode($epilepsy) ?>;


  if (food === "yes") {
    document.getElementById("new_food_allergies_yes").checked = true;
    document.getElementById("new_food_allergies_no").checked = false;
  }

  if (food == "no") {
    document.getElementById("new_food_allergies_yes").checked = false;
    document.getElementById("new_food_allergies_no").checked = true;
  }

  if (insect === "yes") {
    document.getElementById("new_insect_allergy_yes").checked = true;
    document.getElementById("new_insect_allergy_no").checked = false;
  }

  if (insect == "no") {
    document.getElementById("new_insect_allergy_yes").checked = false;
    document.getElementById("new_insect_allergy_no").checked = true;
  }

  if (asthma == "yes") {
    document.getElementById("new_asthma_yes").checked = true;
    document.getElementById("new_asthma_no").checked = false;
    document.getElementById("new_asthma_mild").checked = false;
    document.getElementById("new_asthma_moderate").checked = false;
    document.getElementById("new_asthma_severe").checked = false;
  }
  if (asthma == "no") {
    document.getElementById("new_asthma_yes").checked = false;
    document.getElementById("new_asthma_no").checked = true;
    document.getElementById("new_asthma_mild").checked = false;
    document.getElementById("new_asthma_moderate").checked = false;
    document.getElementById("new_asthma_severe").checked = false;
  }
  if (asthma == "mild") {
    document.getElementById("new_asthma_yes").checked = false;
    document.getElementById("new_asthma_no").checked = false;
    document.getElementById("new_asthma_mild").checked = true;
    document.getElementById("new_asthma_moderate").checked = false;
    document.getElementById("new_asthma_severe").checked = false;
  }
  if (asthma == "moderate") {
    document.getElementById("new_asthma_yes").checked = false;
    document.getElementById("new_asthma_no").checked = false;
    document.getElementById("new_asthma_mild").checked = false;
    document.getElementById("new_asthma_moderate").checked = true;
    document.getElementById("new_asthma_severe").checked = false;
  }
  if (asthma == "severe") {
    document.getElementById("new_asthma_yes").checked = false;
    document.getElementById("new_asthma_no").checked = false;
    document.getElementById("new_asthma_mild").checked = false;
    document.getElementById("new_asthma_moderate").checked = false;
    document.getElementById("new_asthma_severe").checked = true;
  }

  if (epilepsy == "yes") {
    document.getElementById("new_epilepsy_yes").checked = true;
    document.getElementById("new_epilepsy_no").checked = false;
    document.getElementById("new_epilepsy_mild").checked = false;
    document.getElementById("new_epilepsy_moderate").checked = false;
    document.getElementById("new_epilepsy_severe").checked = false;
  }
  if (epilepsy == "no") {
    document.getElementById("new_epilepsy_yes").checked = false;
    document.getElementById("new_epilepsy_no").checked = true;
    document.getElementById("new_epilepsy_mild").checked = false;
    document.getElementById("new_epilepsy_moderate").checked = false;
    document.getElementById("new_epilepsy_severe").checked = false;
  }
  if (epilepsy == "mild") {
    document.getElementById("new_epilepsy_yes").checked = false;
    document.getElementById("new_epilepsy_no").checked = false;
    document.getElementById("new_epilepsy_mild").checked = true;
    document.getElementById("new_epilepsy_moderate").checked = false;
    document.getElementById("new_epilepsy_severe").checked = false;
  }
  if (epilepsy == "moderate") {
    document.getElementById("new_epilepsy_yes").checked = false;
    document.getElementById("new_epilepsy_no").checked = false;
    document.getElementById("new_epilepsy_mild").checked = false;
    document.getElementById("new_epilepsy_moderate").checked = true;
    document.getElementById("new_epilepsy_severe").checked = false;
  }
  if (epilepsy == "severe") {
    document.getElementById("new_epilepsy_yes").checked = false;
    document.getElementById("new_epilepsy_no").checked = false;
    document.getElementById("new_epilepsy_mild").checked = false;
    document.getElementById("new_epilepsy_moderate").checked = false;
    document.getElementById("new_epilepsy_severe").checked = true;

  }
</script>

<script src="../script/edit.js"></script>
</body>
<script src="../script/medicalinfo.js">

</script>

</html>