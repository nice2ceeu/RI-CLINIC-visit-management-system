<?php
include('../components/body.php');
include('../components/navbar.php');
?>


<section class="overflow-x-hidden md:sm:ml-24 lg:ml-72 md:h-dvh xl:lg:ml-82 px-5">

    <section class="relative py-7.5 pt-12">
        <h1 class="krona uppercase bg-white lg:ml-12 px-5 inline z-20 text-3xl">
            Medical Invertory
        </h1>
        <hr class="absolute z-[-1] w-full top-17" />

        <form
            action=""
            method=" POST"
            class="px-8.5 gap-3.5 uppercase my-10 flex justify-center flex-wrap lg:flex-nowrap min-[200px]:w-[90%] ">


            <section class="relative basis-xm  ">
                <label
                    id="medicine"
                    class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
                    for="medicine">medicine name</label>

                <input
                    id="medicine_name"
                    class="border-1 py-2.5 w-full px-4.5 rounded-lg"
                    name="medicine_name"
                    type="text" />

            </section>
            <section class="relative basis-xm ">
                <label
                    id="medicine_qty"
                    class="absolute inline top-0 bg-white ml-2 px-1 leading-1"
                    for="medicine_qty">quantity</label>

                <input
                    id="medicine_qty"
                    class="border-1 py-2.5 w-full px-4.5 rounded-lg"
                    name="medicine_qty"
                    type="number" />
            </section>


            <section class="relative basis-xm">
                <label
                    id="expiration"
                    class="absolute inline top-0 bg-white ml-2 px-1 leading-1"
                    for="expiration">expiration date</label>
                <input
                    id="expiration"
                    class="border-1 py-2.5 px-4.5 rounded-lg w-full"
                    name="expiration"
                    type="date" />
            </section>

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
        <hr>

    </section>

    <table class="w-full poppins uppercase">
        <thead class="[&>tr>th]:px-4 text-left [&>tr>th]:pb-22">
            <tr>
                <th>medicine name</th>
                <th>quantity</th>
                <th>expiration date</th>
                <th>status of stock</th>
                <th>Issued</th>
            </tr>
        </thead>
        <tbody class="text-left [&>tr]:odd:bg-[#a8a8a829] [&>tr>td]:px-4 [&>tr>td]:py-4.5">

            <tr>
                <td>gamot para kay badang</td>
                <td>10</td>
                <td>get date in fkin database</td>
                <td>high parang si aklas</td>
                <td class="">
                    <form action="" class="flex gap-5 flex-wrap">
                        <input class="border-1 w-[70%] md:w-32 rounded-lg p-2.5" type="number" name="" id="">
                        <button action="submit" class="bg-primary text-white px-5 rounded-lg">submit</button>
                    </form>
                </td>
            </tr>

        </tbody>
    </table>
</section>

</body>

</html>