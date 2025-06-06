document.addEventListener("click", (e) => {
  const id = e.target.id;
  if (!id) return;

  // Check if clicked id ends with '-yes'
  if (id.endsWith("-yes")) {
    // Get the matching '-no' id by replacing '-yes' with '-no'
    const noId = id.replace("-yes", "-no");
    const noRadio = document.getElementById(noId);
    if (noRadio) noRadio.checked = false;
  }

  // Check if clicked id ends with '-no'
  if (id.endsWith("-no")) {
    // Get the matching '-yes' id by replacing '-no' with '-yes'
    const yesId = id.replace("-no", "-yes");
    const yesRadio = document.getElementById(yesId);
    if (yesRadio) yesRadio.checked = false;
  }

  if (e.target.id === "other-no") {
    const specify = document.getElementById("specify");
    const opacity = document.getElementById("specifyOpacity");
    if (specify) {
      specify.disabled = true;
      opacity.classList.add("opacity-40");
    }
  }

  if (e.target.id === "other-yes") {
    alert("??");
    const specify = document.getElementById("specify");
    const opacity = document.getElementById("specifyOpacity");
    if (specify) {
      specify.disabled = false;
      opacity.classList.remove("opacity-40");
    }
  }

  if (e.target.id === "allergy-no") {
    alert("??");
    const allergy = document.getElementById("allergy");

    if (allergy) {
      allergy.disabled = true;
      allergy.classList.add("opacity-40");
    }
  }

  if (e.target.id === "allergy-yes") {
    const allergy = document.getElementById("allergy");
    if (allergy) {
      allergy.disabled = false;
      allergy.classList.remove("opacity-40");
    }
  }

  if (e.target.id === "hospitalized-no") {
    const year = document.getElementById("year");
    const reason = document.getElementById("reason");
    const hospitalize = document.getElementById("hospitalize");
    if (year) {
      year.disabled = true;
      reason.disabled = true;
      hospitalize.classList.add("opacity-30");
    }
  }

  if (e.target.id === "hospitalized-yes") {
    const year = document.getElementById("year");
    const reason = document.getElementById("reason");
    const hospitalize = document.getElementById("hospitalize");

    if (year) {
      year.disabled = false;
      reason.disabled = false;
      hospitalize.classList.remove("opacity-30");
    }
  }
});
