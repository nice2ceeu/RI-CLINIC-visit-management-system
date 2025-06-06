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
      <!-- namee of student -->

      <section class="flex">
        <label
          id="label"
          class="text-nowrap mr-1 font-semibold"
          for="fullname">full name: </label>
        <input
          id="fullname"
          class=" border-b-1 focus:border-b-1  px-2 focus:outline-0 w-82"
          name=" fullname"
          required
          type="text" />
      </section>

      <!-- gender of student -->

      <section class="flex">
        <label
          id="label"
          class="text-nowrap mr-1 font-semibold"
          for="gender">gender: </label>
        <input
          id="gender-yes"
          class="border-b-1 focus:border-b-1  px-2 focus:outline-0 w-32"
          name="gender"
          required
          type="text" />
      </section>


      <!-- date -->

      <section class="flex">
        <label
          id="label"
          class="text-nowrap mr-1 font-semibold"
          for="date">date: </label>
        <input
          id="date"
          class=" border-b-1 focus:border-b-1  px-2 focus:outline-0 w-38"
          name="date"
          required
          type="date" />
      </section>


      <!-- address -->

      <section class="flex">
        <label
          id="label"
          class="text-nowrap mr-1 font-semibold"
          for="address">home address: </label>
        <input
          id="address"
          class=" border-b-1 focus:border-b-1  px-2 focus:outline-0 w-[32rem]"
          name="address"
          required
          type="text" />
      </section>

      <!-- date of birth -->
      <section class="flex">
        <label
          id="label"
          class="text-nowrap mr-1 font-semibold"
          for="birthday">date of birth: </label>
        <input
          id="birthday"
          class=" border-b-1 focus:border-b-1  px-2 focus:outline-0 w-38"
          name="birthday"
          required
          type="date" />
      </section>

      <!--birthplace -->
      <section class="flex">
        <label
          id="label"
          class="text-nowrap mr-1 font-semibold"
          for="birthplace">birthplace: </label>
        <input
          id="birthplace"
          class=" border-b-1 focus:border-b-1  px-2 focus:outline-0 w-38"
          name="birthplace"
          required
          type="text" />
      </section>

      <!--religion -->
      <section class="flex">
        <label
          id="label"
          class="text-nowrap mr-1 font-semibold"
          for="religion">religion: </label>
        <input
          id="religion"
          class=" border-b-1 focus:border-b-1  px-2 focus:outline-0 w-38"
          name="religion"
          required
          type="text" />
      </section>

      <!--citizenship -->
      <section class="flex">
        <label
          id="label"
          class="text-nowrap mr-1 font-semibold"
          for="citizenship">citizenship: </label>
        <input
          id="citizenship"
          class=" border-b-1 focus:border-b-1  px-2 focus:outline-0 w-38"
          name="citizenship"
          required
          type="text" />
      </section>

      <!--person to contact -->
      <section class="flex">
        <label
          id="label"
          class="text-nowrap mr-1 font-semibold"
          for="emergencyContact">person to contact in case of emergency: </label>
        <input
          id="emergencyContact"
          class=" border-b-1 focus:border-b-1  px-2 focus:outline-0 w-62"
          name="emergencyContact"
          required
          type="name" />
      </section>

      <!--relationship to contact number -->
      <section class="flex">
        <label
          id="label"
          class="text-nowrap mr-1 font-semibold"
          for="relationship">relationship: </label>
        <input
          id="relationship"
          class=" border-b-1 focus:border-b-1  px-2 focus:outline-0 w-32"
          name="relationship"
          required
          type="text" />
      </section>


      <!--contactnumber -->
      <section class="flex">
        <label
          id="label"
          class="text-nowrap mr-1 font-semibold"
          for="contactNumber">contactnumber: </label>
        <input
          id="relationship"
          class=" border-b-1 focus:border-b-1  px-2 focus:outline-0 w-32"
          name="contactNumber"
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

    <section class="poppins capitalize flex gap-2 justify-evenly">
      <!-- First column -->
      <section class="poppins  w-full flex gap-2 justify-evenly">
        <div class="flex gap-2 w-full p-3 flex-col [&>div]:grid [&>div]:items-center [&>div]:p-2 [&>div]:grid-cols-[1fr_30px_30px] [&>div]:grid-row-auto [&>div]:gap-5 [&>div]:border-1">
          <div class="">
            <div></div>
            <h1>yes</h1>
            <h1>no</h1>
          </div>
          <div class="">
            <div>ADHD (Attention deficit hyperactivity disorder)</div>
            <input id="adhd-yes" name="adhd" value="yes" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
            <input id="adhd-no" name="adhd" value="no" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
          </div>
          <div class="">
            <div>asthma</div>
            <input id="asthma-yes" name="asthma" value="yes" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
            <input id="asthma-no" name="asthma" value="no" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
          </div>
          <div class="">
            <div>Anemia</div>
            <input id="anemia-yes" name="anemia" value="yes" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
            <input id="anemia-no" name="anemia" value="no" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
          </div>
          <div class="">
            <div>bleeding problem</div>
            <input id="bleeding-yes" name="bleeding" value="yes" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
            <input id="bleeding-no" name="bleeding" value="no" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
          </div>
          <div class="">
            <div>Cancer</div>
            <input id="cancer-yes" name="cancer" value="yes" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
            <input id="cancer-no" name="cancer" value="no" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
          </div>
          <div class="">
            <div>Chest pain</div>
            <input id="chestpain-yes" name="chestpain" value="yes" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
            <input id="chestpain-no" name="chestpain" value="no" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
          </div>
          <div class="">
            <div>Diabetes</div>
            <input id="diabetes-yes" name="diabetes" value="yes" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
            <input id="diabetes-no" name="diabetes" value="no" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
          </div>
          <div class="">
            <div>fainting</div>
            <input id="fainting-yes" name="fainting" value="yes" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
            <input id="fainting-no" name="fainting" value="no" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
          </div>
          <div class="">
            <div>fracture</div>
            <input id="fracture-yes" name="fracture" value="yes" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
            <input id="fracture-no" name="fracture" value="no" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
          </div>
          <div class="">
            <div>hearing/speach problem</div>
            <input id="hearing-yes" name="hearing" value="yes" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
            <input id="hearing-no" name="hearing" value="no" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
          </div>
        </div>

        <!-- Second column -->
        <div class="flex gap-2  w-full  p-3 flex-col [&>div]:grid [&>div]:items-center [&>div]:p-2 [&>div]:grid-cols-[1fr_30px_30px] [&>div]:grid-row-auto [&>div]:gap-5 [&>div]:border-1">
          <div class="">
            <div></div>
            <h1>yes</h1>
            <h1>no</h1>
          </div>
          <div class="">
            <div>hearth condition</div>
            <input id="heart-yes" name="heart" value="yes" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
            <input id="heart-no" name="heart" value="no" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
          </div>
          <div class="">
            <div>lung problems</div>
            <input id="lung-yes" name="lung" value="yes" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
            <input id="lung-no" name="lung" value="no" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
          </div>
          <div class="">
            <div>Mental or psychological problems</div>
            <input id="mental-yes" name="mental" value="yes" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
            <input id="mental-no" name="mental" value="no" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
          </div>
          <div class="">
            <div>Migraine/Headache</div>
            <input id="migraine-yes" name="migraine" value="yes" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
            <input id="migraine-no" name="migraine" value="no" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
          </div>
          <div class="">
            <div>Seizure/Convulsion</div>
            <input id="seizure-yes" name="seizure" value="yes" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
            <input id="seizure-no" name="seizure" value="no" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
          </div>
          <div class="">
            <div>Tuberculosis</div>
            <input id="tb-yes" name="tb" value="yes" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
            <input id="tb-no" name="tb" value="no" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
          </div>
          <div class="">
            <div>Hernia</div>
            <input id="hernia-yes" name="hernia" value="yes" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
            <input id="hernia-no" name="hernia" value="no" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
          </div>
          <div class="">
            <div>Urinary/kidney problem</div>
            <input id="kidney-yes" name="kidney" value="yes" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
            <input id="kidney-no" name="kidney" value="no" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
          </div>
          <div class="">
            <div>Vision: Glasses/Contact Lens</div>
            <input id="vision-yes" name="vision" value="yes" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
            <input id="vision-no" name="vision" value="no" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
          </div>
          <div class="">
            <div>other issue</div>
            <input id="other-yes" name="other" value="yes" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
            <input id="other-no" name="other" value="no" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
          </div>
        </div>
      </section>
    </section>


    <!-- other information for medical History  -->


    <section class="flex gap-y-5 flex-col poppins  px-3 [&>section>label]:font-semibold">
      <section id="specifyOpacity" class="flex ">
        <label
          id="label"
          class="text-nowrap mr-1 font-semibold"
          for="specify">IF YES please specify: </label>
        <input
          id="specify"
          class=" border-b-1 focus:border-b-1  px-2 focus:outline-0 w-[50rem]"
          name="specify"
          required
          type="text" />
      </section>

      <section class="flex">
        <label
          id="label"
          class="text-nowrap mr-1 font-semibold"
          for="underMedication">Are you under under medication treatment now?
          if so, what is the condition being treated:</label>
        <input
          id="underMedication"
          class=" border-b-1 focus:border-b-1  px-2 focus:outline-0 w-[50rem]"
          name="underMedication"
          required
          type="text" />
      </section>

      <section class="flex">
        <label
          id="label"
          class="text-nowrap mr-1 font-semibold"
          for="pastMedication">MEDICATION that are already take form the past:</label>
        <input
          id="pastMedication"
          class=" border-b-1 focus:border-b-1  px-2 focus:outline-0 w-[50rem]"
          name="pastMedication"
          required
          type="text" />
      </section>

      <section class="flex">
        <label
          id="label"
          class="text-nowrap mr-1 font-semibold uppercase"
          for="currentMedication">Current medication:</label>
        <input
          id="currentMedication"
          class=" border-b-1 focus:border-b-1  px-2 focus:outline-0 w-[50rem]"
          name="currentMedication"
          required
          type="text" />
      </section>


      <section class="flex">
        <label
          id="label"
          class="text-nowrap mr-1 font-semibold uppercase"
          for="allergy">do you have allergy( insect, foods , medications):</label>
        <label
          id="label"
          class="text-nowrap mr-1 font-semibold uppercase"
          for="allergy-no">yes</label>
        <input id="allergy-yes" name="allergy" value="yes" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
        <label
          id="label"
          class="text-nowrap mr-1 font-semibold uppercase"
          for="allergy-no">no</label>
        <input id="allergy-no" name="allergy" value="no" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
        <input
          id="allergy"
          class=" border-b-1 focus:border-b-1 px-2 focus:outline-0 w-[50rem]"
          name="allergy"
          required
          type="text" />
      </section>
      <div class="relative w-full">
        <label
          id="label"
          class=" inline top-[-10px] left-2 absolute px-5 bg-white text-nowrap mr-1 font-semibold uppercase"
          for="chillhoodIllness">chillhood Illnesses</label>
        <select name="chillhoodIllness" id="chillhoodIllness" class="border-1 p-3.5 w-full">
          <option disabled selected value="" class="opacity-40 ">select Illnesses</option>
          <option value="mumps">mumps</option>
          <option value="chickenPox">chickenpox</option>
          <option value="measles">measles</option>
          <option value="germanMeasles">german measles</option>
        </select>
      </div>
      <section class="flex ">
        <label
          id="label"
          class="text-nowrap mr-1 font-semibold uppercase"
          for="immunization">immunization</label>
        <label
          id="label"
          class="text-nowrap mr-1 font-semibold uppercase"
          for="bcg">BCG</label>
        <input id="bcg" name="bcg" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">

        <label
          id="label"
          class="text-nowrap mr-1 font-semibold uppercase"
          for="dpt">DPT</label>
        <input id="dpt" name="dpt" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">

        <label
          id="label"
          class="text-nowrap mr-1 font-semibold uppercase"
          for="opv">OPV</label>
        <input id="opv" name="opv" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">


        <label
          id="label"
          class="text-nowrap mr-1 font-semibold uppercase"
          for="hep-b">HEP.B</label>
        <input id="hep-b" name="hep-b" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">


        <label
          id="label"
          class="text-nowrap mr-1 font-semibold uppercase"
          for="measleVaccine">MEASLE VACCINE</label>
        <input id="measleVaccine" name="measleVaccine" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">


        <label
          id="label"
          class="text-nowrap mr-1 font-semibold uppercase"
          for="fluVaccine">FLU VACCINE</label>
        <input id="fluVaccine" name="fluVaccine" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">


        <label
          id="label"
          class="text-nowrap mr-1 font-semibold uppercase"
          for="varicella">VARICELLA</label>
        <input id="varicella" name="varicella" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">


        <label
          id="label"
          class="text-nowrap mr-1 font-semibold uppercase"
          for="mmr">MMR</label>
        <input id="mmr" name="mmr" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
        <label
          id="label"
          class="text-nowrap mr-1 font-semibold uppercase"
          for="etc">etc,</label>
        <input id="etc" name="etc" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
      </section>
      <section>
        <label
          id="label"
          class="text-nowrap mr-1 font-semibold uppercase"
          for="complete-yes">complete</label>
        <input id="-yes" name="complete" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
        <label
          id="label"
          class="text-nowrap mr-1 font-semibold uppercase"
          for="incomplete-no">incomplete</label>
        <input id="-no" name="incomplete" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">

        <label
          id="label"
          class="text-nowrap mr-1 font-semibold uppercase"
          for="mmr">tetanus toxoviod: </label>
        <input id="mmr" name="mmr" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">

      </section>

      <section class="flex">
        <label
          id="label"
          class="text-nowrap mr-1 font-semibold uppercase"
          for="dateLastGiven">date last given:</label>
        <input
          id="dateLastGiven"
          class=" border-b-1 focus:border-b-1  px-2 focus:outline-0 w-[32]"
          name="dateLastGiven"
          required
          type="date" />
      </section>
    </section>

    <!-- hospitalized  -->

    <section>
      <section class="flex  poppins gap-y-5 gap-x-1.5 mt-5  poppins px-3">
        <label
          id="label"
          class="text-nowrap mr-1 font-semibold"
          for="Hospitalized">Have you been hospitalized? </label>

        <h6>
          ( accident, illness, surgery, fracture, etc )
        </h6>
        <label
          id="label"
          class="text-nowrap mr-1 font-semibold"
          for="yes">yes</label>
        <input id="hospitalized-yes" name="hospitalized" value="yes" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
        <label
          id="label"
          class="text-nowrap mr-1 font-semibold"
          for="no">no</label>
        <input id="hospitalized-no" name="hospitalized" value="no" type="radio" class="appearance-none checked:bg-[#06118e8a] w-5 h-5 border border-gray-500 ">
      </section>

      <!-- hospitalized  -->
      <section
        id=""
        class="[&>section]:grid  poppins px-3 mt-1 [&>section]:grid-cols-[22rem_1fr] [&>section]:gap-5 [&>section]:grid-row-auto">
        <section class="text-center font-semibold p-3 uppercase">
          <div>year</div>
          <div>reason</div>
        </section>

        <section id="hospitalize" class="text-center  p-3">
          <input
            id="year"
            class=" border-b-1  focus:border-b-1 px-2 focus:outline-0 w-full"
            name="year"
            required
            type="date" />

          <input
            id="reason"
            class=" border-b-1  focus:border-b-1 px-2 focus:outline-0 w-full"
            name="reason"
            required
            type="text" />
        </section>

        <!-- Family medical History -->

      </section>
      <section class="space-y-2 w-full mt-5 px-3">
        <h1 class="font-semibold text-xl">Family medical History</h1>
        <h6 class="block">Type all the condition or illness that your family has (example asthma, diabetes, tb, migraine, hypertension)</h6>
        <input
          id="Family-medical-history"
          class=" border-b-1  focus:border-b-1 px-2 focus:outline-0 w-full"
          name="Family-medical-history"
          required
          type="text" />
      </section>



    </section>
    <!-- for female  -->
    <section class="flex gap-2 poppins w-full mt-5 px-3">
      <h1 class="font-semibold uppercase">for female: menarche</h1>
      <section>
        <label for="">height(cm.)</label>
        <input
          id="height"
          class=" border-b-1  focus:border-b-1 px-2 focus:outline-0 w-32"
          name="height"
          required
          type="text" />
      </section>

      <section>
        <label for="">weight(kg.)</label>
        <input
          id="weight"
          class=" border-b-1  focus:border-b-1 px-2 focus:outline-0 w-32"
          name="weight"
          required
          type="text" />
      </section>

      <section class="">
        <label for="">first menstrual period</label>
        <input
          id="weight"
          class=" border-b-1  focus:border-b-1 px-2 focus:outline-0 w-38"
          name="weight"
          required
          type="date" />
      </section>
    </section>

    <!-- covid 19 vaccine -->
    <section class="px-3 space-y-1 mt-5 w-full">
      <div class="flex gap-1 [&>p]:p-3 [&>p]:w-full [&>p]:border-1">
        <p>Date of 1<sup>st</sup> dose</p>
        <p>Date of 1<sup>st</sup> dose</p>
        <p>vaccine manufacturer</p>
        <p>booster</p>
        <p>(+) Covid (when)</p>
      </div>

      <div class="flex gap-1 [&>input]:p-3 [&>input]:w-full ">
        <input type="date" name="firstDose" class="appearance-none border-b-1 focus:border-b-1 focus:outline-0"></input>
        <input type="date" name="secondDose" class="appearance-none border-b-1 focus:border-b-1 focus:outline-0"></input>
        <input type="text" name="vaccineBrand" class="appearance-none border-b-1 focus:border-b-1 focus:outline-0"></input>
        <input type="text" name="booster" class="appearance-none border-b-1 focus:border-b-1 focus:outline-0"></input>
        <input type="date" name="plusCovid" class="appearance-none border-b-1 focus:border-b-1 focus:outline-0"></input>
      </div>
    </section>
    <!-- SUBMIT BUTTON FOR MEDICAL FORM  -->
    <button
      name="submit"
      class="bg-primary poppins place-self-center mt-5 w-1/5 justify-center cursor-pointer text-white px-5 py-3 flex gap-x-3 rounded-lg">
      <p>SUBMIT</p>
      <img src="../assets/icons/check-icon.svg" alt="check-icon" />
    </button>

  </form>
</section>
<script src="../script/medform.js">

</script>
</body>

</html>