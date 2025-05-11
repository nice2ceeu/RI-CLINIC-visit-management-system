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

<section class="overflow-x-hidden md:sm:ml-24 lg:ml-72 md:h-dvh xl:lg:ml-82">
  <section class="relative py-7.5 pt-12">
    <h1 class="krona uppercase bg-white lg:ml-12 px-5 inline z-20 text-3xl">
      Medical form
    </h1>
    <hr class="absolute z-[-1] w-full top-17" />
  </section>

  <form action="../../Controller/medform.php" method="POST">
    <!-- form for student information........ -->
    <section
      class="poppins flex flex-wrap px-3 uppercase [&>section]:basis-52 md:[&>section]:mx-0 [&>section]:mx-auto md:gap-5 gap-y-7">
      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="fullname">full name</label>
        <input
          id="fullname"
          class="border-1 py-2.5 w-full px-4.5 rounded-lg"
          name="fullname"
          required
          type="text" />
      </section>

      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="grade_section">Grade & section</label>
        <input
          id="grade_section"
          class="border-1 py-2.5 w-full px-4.5 rounded-lg"
          name="grade_section"
          required
          type="text" />
      </section>

      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="birthdate">birthdate</label>
        <input
          id="birthdate"
          class="border-1 py-2.5 w-full px-4.5 rounded-lg"
          name="birthdate"
          required
          type="date" />
      </section>

      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="age">age</label>
        <input
          id="age"
          class="border-1 py-2.5 w-full px-4.5 rounded-lg"
          name="age"
          required
          type="number" />
      </section>

      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="gender">gender</label>
        <input
          id="gender"
          class="border-1 py-2.5 w-full px-4.5 rounded-lg"
          name="gender"
          required
          type="text" />
      </section>

      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="height">HEIGHT ( cm )</label>
        <input
          id="height"
          class="border-1 py-2.5 w-full px-4.5 rounded-lg"
          name="height"
          required
          type="number" />
      </section>

      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="weight">WEIGHT ( kg )</label>
        <input
          id="weight"
          class="border-1 py-2.5 w-full px-4.5 rounded-lg"
          name="weight"
          required
          type="number" />
      </section>

      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="address">address</label>
        <input
          id="address"
          class="border-1 py-2.5 w-full px-4.5 rounded-lg"
          name="address"
          required
          type="text" />
      </section>
      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="parent">parent / guardian</label>
        <input
          id="parent"
          class="border-1 py-2.5 w-full px-4.5 rounded-lg"
          name="parent"
          required
          type="text" />
      </section>
      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="contact">contact no#</label>
        <input
          id="contact"
          class="border-1 py-2.5 w-full px-4.5 rounded-lg"
          name="contact"
          required
          type="text" />
      </section>
    </section>

    <!--form for STUDENT MEDICAL HISTORY ........ -->
    <section class="relative py-7.5 pt-12">
      <h1 class="krona uppercase bg-white lg:ml-12 px-5 inline z-20 md:text-lg">
        STUDENT MEDICAL HISTORY
      </h1>
      <hr class="absolute z-[-1] w-full top-15" />
    </section>
    <section
      class="poppins flex items-center flex-col uppercase gap-y-5 pb-5 [&>section]:p-5 border-b-1 [&>section]:leading-3 md:justify-evenly md:flex-row">
      <section
        class="[&>article]:flex [&>article]:flex-col [&>article]:gap-y-3 [&>article]:items-center flex gap-5 md:col-start-1">
        <h1 class="font-semibold">asthma</h1>
        <article class="">
          <label for="asthma_yes">yes</label>
          <input id="asthma_yes" name="asthma" type="radio" value="yes" required />
        </article>
        <article>
          <label for="asthma_no">no</label>
          <input id="asthma_no" name="asthma" type="radio" value="no" required />
        </article>
        <article>
          <label for="asthma_mild">mild</label>
          <input id="asthma_mild" name="asthma" type="radio" value="mild" required />
        </article>
        <article>
          <label for="asthma_moderate">moderate</label>
          <input id="asthma_moderate" name="asthma" type="radio" value="moderate" required />
        </article>
        <article>
          <label for="asthma_severe">severe</label>
          <input id="asthma_severe" name="asthma" type="radio" value="severe" required />
        </article>
      </section>
      <div class="hidden md:block border-l-1 h-32"></div>
      <section
        class="[&>article]:flex [&>article]:flex-col [&>article]:gap-y-3 [&>article]:items-center flex gap-5 md:col-start-1">
        <h1 class="font-semibold">EPILEPSY</h1>
        <article class="">
          <label for="epilepsy_yes">yes</label>
          <input id="epilepsy_yes" name="epilepsy" type="radio" value="yes" required />
        </article>
        <article>
          <label for="epilepsy_no">no</label>
          <input id="epilepsy_no" name="epilepsy" type="radio" value="no" required />
        </article>
        <article>
          <label for="epilepsy_mild">mild</label>
          <input id="epilepsy_mild" name="epilepsy" type="radio" value="mild" required />
        </article>
        <article>
          <label for="epilepsy_moderate">moderate</label>
          <input id="epilepsy_moderate" name="epilepsy" type="radio" value="moderate" required />
        </article>
        <article>
          <label for="epilepsy_severe">severe</label>
          <input id="epilepsy_severe" name="epilepsy" type="radio" value="severe" required />
        </article>
      </section>
    </section>
    <section class="space-y-5 poppins uppercase p-5">
      <article class="flex gap-5">
        <h1 class="font-semibold">FOod ALLERGIES</h1>
        <article class="space-x-1.5">
          <label for="food_allergies_yes">yes</label>
          <input id="food_allergies_yes" name="foodallergy" type="radio" value="yes" required />
          <label for="food_allergies_no">no</label>
          <input id="food_allergies_no" name="foodallergy" type="radio" value="no" required />
        </article>
      </article>

      <article>
        <input
          class="border-b-1 focus:outline-0 py-3 w-full"
          placeholder="TYPE IF STUDENT HAVE FOOD ALLERGIES / LIST FOODS ALLERGIC REACTION"
          id="food_allergies"
          name="food_allergies"
          type="text" />
      </article>
    </section>

    <section class="space-y-5 poppins uppercase p-5">
      <article class="flex gap-5">
        <h1 class="font-semibold">life-threatening insect allergy</h1>
        <article class="space-x-1.5">
          <label for="insect_allergies_yes">yes</label>
          <input id="insect_allergies_yes" name="insectallergy" type="radio" value="yes" required />
          <label for="insect_allergies_no">no</label>
          <input id="insect_allergies_no" name="insectallergy" type="radio" value="no" required />
        </article>
      </article>
      <article>
        <input
          class="border-b-1 focus:outline-0 py-3 w-full"
          placeholder="IF STUDENT ALLERGIC TO INSECTS BITES, PLEASE LIST INSECTS"
          id="insect_bites"
          name="insect_bites"
          type="text" />
      </article>
    </section>
    <!--  -->
    <!--  -->
    <!--  -->
    <!--  -->
    <!-- SUBMIT BUTTON FOR MEDICAL FORM  -->
    <button
      name="submit"
      class="bg-primary poppins place-self-center mt-5 w-1/5 justify-center cursor-pointer text-white px-5 py-3 flex gap-x-3 rounded-lg">
      <p>SUBMIT</p>
      <img src="../assets/icons/check-icon.svg" alt="check-icon" />
    </button>

  </form>
</section>
<script>
  let food_yes = document.getElementById('food_allergies_yes');
  let food_no = document.getElementById('food_allergies_no');
  let insect_yes = document.getElementById('insect_allergies_yes');
  let insect_no = document.getElementById('insect_allergies_no');

  let food_allergies = document.getElementById('food_allergies');
  let insect_bites = document.getElementById('insect_bites');
  // Add event listeners to the radio buttons

  food_yes.addEventListener('change', function() {
    if (food_yes.checked) {
      food_allergies.removeAttribute('readonly'); 
      food_allergies.removeAttribute('disabled'); 
    }
  });

  food_no.addEventListener('change', function() {
    if (food_no.checked) {
      food_allergies.setAttribute('readonly', true); 
      food_allergies.setAttribute('disabled', true); 
    }
  });

  insect_yes.addEventListener('change', function() {
    if (insect_yes.checked) {

      insect_bites.removeAttribute('readonly'); 
      insect_bites.removeAttribute('disabled'); 
    }
  });

  insect_no.addEventListener('change', function() {
    if (insect_no.checked) {
      insect_bites.setAttribute('readonly', true); 
      insect_bites.setAttribute('disabled', true); 
    }
  });
</script>
</body>

</html>