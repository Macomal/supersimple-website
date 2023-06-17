<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nephrozone Health Care</title>
  <link rel="stylesheet" href="styles/forms.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
  <header>
    <div class="mainform">
      <h2>Nephrozone Electronic Health Care Records System</h2>
      <table>
        <tr>
          <td><label for="MPatient_ID">Patient ID: </label><br></td>
          <td><input type="text" id="MainPatientID" name="MainPatientID" maxlength="10" onkeypress="return onlyNumberKey(event)"/></td>
        </tr>
        <tr>
          <td><button class="search-button" id="ptsearch">SEARCH</button></td>
        </tr>
      </table>
    </div>
  </header>
  <div class="w3-bar w3-black">
    <button class="w3-bar-item w3-button" onclick="openScreen('Census')">Census</button>
    <button class="w3-bar-item w3-button" onclick="openScreen('Diagnosis')">Diagnosis</button>
    <button class="w3-bar-item w3-button" onclick="openScreen('Medication')">Medication </button>
    <button class="w3-bar-item w3-button" onclick="openScreen('LaboratoryResult')">Laboratory Result </button>
    <button class="w3-bar-item w3-button" onclick="openScreen('ImagingStudy')">Imaging Study</button>
    <button class="w3-bar-item w3-button" onclick="openScreen('Procedure')">Procedure</button>
    <button class="w3-bar-item w3-button" onclick="openScreen('Allergy')">Allergy</button>
    <button class="w3-bar-item w3-button" onclick="openScreen('Immunization')">Immunization</button>
  </div>
  
  <div id="Census" class="w3-container city">
    <h2>Census</h2>
    <form id="CensusForm" name="CensusForm" class="mainform">
      <table>
        <tr>
          <td><label for="Patient_ID">Patient ID: </label></td>
          <td><input type="text" id="PatientID" name="PatientID" maxlength="10" onkeypress="return onlyNumberKey(event)"/></td>
        </tr>
        <tr>
          <td><label for="PHIC_IN">Phil Health Number: </label></td>
          <td><input type="text" id="PHICIN" name="PHICIN" maxlength="10" onkeypress="return onlyNumberKey(event)"/></td>
        </tr>
        <tr>
          <td><label for="First_Name">Patient FirstName: </label></td>
          <td><input type="text" id="c" name="FirstName" maxlength="20"/></td>
        </tr>
        <tr>
          <td><label for="Last_Name">Patient LastName: </label></td>
          <td><input type="text" id="LastName" name="LastName" maxlength="20"/></td>
        </tr>
        <tr>
          <td><label for="DateofBirth">Date Of Birth: </label></td>
          <td><input type="date" id="DateOfBirth" name="DateOfBirth"/></td>
        </tr>
        <tr>
          <td><label for="Gend">Gender: </label></td>
          <td><input type="text" id="Gender" name="Gender" maxlength="20"/></td>
        </tr>
        <tr>
          <td><label for="Addr">Address: </label></td>
          <td><input type="text" id="Address" name="Address" maxlength="20"/></td>
        </tr>
        <tr>
          <td><label for="PhoneNo">Phone Number: </label></td>
          <td><input type="text" id="PhoneNum" name="PhoneNum" maxlength="10" onkeypress="return onlyNumberKey(event)"/></td>
        </tr>
        <tr>
          <td><label for="Emails">Email: </label></td>
          <td><input type="text" id="Email" name="Email" maxlength="50"/></td>
        </tr>
        <tr>
          <td><label for="Emergncy">Emergency Contact Details: </label></td>
          <td><input type="text" id="Emergency" name="Emergency" maxlength="20"/></td>
        </tr>
        <tr>
          <td><label for="Allrgy">Allergies: </label></td>
          <td><input type="text" id="Allergies" name="Allergies" maxlength="100"/></td>
        </tr>
        <tr>
          <td><label for="MedHist">Medical History: </label></td>
          <td><input type="text" id="MedicalHistory" name="MedicalHistory" maxlength="100"/></td>
        </tr>
        <tr>
          <td><label for="FamHist">Family History: </label></td>
          <td><input type="text" id="FamilyHistory" name="FamilyHistory" maxlength="100"/></td>  
        </tr>
        <tr>
          <td><button class="search-button" id="ptsave">Save Details</button></td>
        </tr>
      </table>
    </form>
  </div>

  <div id="Diagnosis" class="w3-container city"  style="display:none">
    <h2>Diagnosis</h2>
    <form id="DiagnosisForm" name="Diagnosis" class="mainform">
      <table>
        <tr>
          <td><label for="VitSigID">Vital Signs ID: </label></td>
          <td><input type="text" id="VitalSignsID" name="VitalSignsID" maxlength="10" onkeypress="return onlyNumberKey(event)"/></td>
        </tr>
        <tr>
          <td><label for="Patient_ID">Patient ID: </label></td>
          <td><input type="text" id="PatientID" name="PatientID" maxlength="10" onkeypress="return onlyNumberKey(event)"/></td>
        </tr>
        <tr>
          <td><label for="PHIC_IN">Phil Health Number: </label></td>
          <td><input type="text" id="PHICIN" name="PHICIN" maxlength="10" onkeypress="return onlyNumberKey(event)"/></td>
        </tr>
        <tr>
          <td><label for="Meas_Date">Measurement Date: </label></td>
          <td><input type="date" id="MeasurementDate" name="MeasurementDate"/></td>
        </tr>
        <tr>
          <td><label for="BP">Blood Pressure: </label></td>
          <td><input type="text" id="BloodPressure" name="BloodPressure" maxlength="50"/></td>
        </tr>
        <tr>
          <td><label for="HR">Heart Rate: </label></td>
          <td><input type="text" id="HeartRate" name="HeartRate" maxlength="10" onkeypress="return onlyNumberKey(event)"/></td>
        </tr>
        <tr>
          <td><label for="RR">Respiratory Rate: </label></td>
          <td><input type="text" id="RespiratoryRate" name="RespiratoryRate" maxlength="10" onkeypress="return onlyNumberKey(event)"/></td>
        </tr>
        <tr>
          <td><label for="T">Temperature: </label></td>
          <td><input type="text" id="Temperature" name="Temperature" maxlength="10" onkeypress="return onlyNumberKey(event)"/></td>
        </tr>
        <tr>
          <td><label for="OS">Oxygen Saturation: </label></td>
          <td><input type="text" id="OxygenSaturation" name="OxygenSaturation" maxlength="10" onkeypress="return onlyNumberKey(event)"/></td>
        </tr>
        <tr>
          <td><label for="HistIll">History of illness: </label></td>
          <td><input type="text" id="HistIllness" name="HistIllness" maxlength="100"/></td>
        </tr>
        <tr>
          <td><label for="MedHist">Medical History: </label></td>
          <td><input type="text" id="MedHistory" name="MedHistory" maxlength="100"/></td>
        </tr>
        <tr>
          <td><label for="Reprsent">Representative: </label><br></td>
          <td><input type="text" id="Representative" name="Representative" maxlength="100"/></td>
        </tr>
        <tr>
          <td><label for="RepType">Representative Type: </label></td>
          <td><select id="RepTypeID" name="RepTypeID"/>
            <option value="Spouse">Spouse</option>
            <option value="Father">Father</option>
            <option value="Mother">Mother</option>
            <option value="Son">Son</option>
            <option value="Daughter">Daughter</option>
            <option value="CareGiver">CareGiver</option>
            <option value="Helper">Helper</option>
            </select>
          </td>
        </tr>
        <tr>
          <td><button class="search-button" id="diagSave">Save Details</button></td>
        </tr>
      </table>
    </form>
  </div>
  

  <div id="Medication" class="w3-container city"  style="display:none">
    <h2>Medication</h2>
    <form id="MedicationForm" name="MedicationForm" class="mainform">
      <label for="MID">Medication ID: </label><br>
      <input type="text" id="MedicationID" name="MedicationID" maxlength="10" onkeypress="return onlyNumberKey(event)"/><br>
      <label for="First_Name">Medication Name: </label><br>
      <input type="text" id="MedicationName" name="MedicationName" maxlength="20"/><br>
      <label for="Dos">Dosage: </label><br>
      <input type="text" id="Dosage" name="Dosage" maxlength="20"/><br>
      <label for="Freq">Frequency: </label><br>
      <input type="text" id="Frequency" name="Frequency" maxlength="20"/><br>
      
      <label for="StrtDate">Start Date: </label><br>
      <input type="date" id="StartDate" name="StartDate"/><br>
      <label for="EdDate">End Date: </label><br>
      <input type="date" id="EndDate" name="EndDate"/><br>
      <label for="HPI">Prescribed Healthcare Provider ID: </label><br>
      <input type="text" id="HealthcareProviderID" name="HealthcareProviderID" maxlength="10" onkeypress="return onlyNumberKey(event)"/><br>
      <label for="Patient_ID">Patient ID: </label><br>
      <input type="text" id="PatientID" name="PatientID" maxlength="10" onkeypress="return onlyNumberKey(event)"/><br>

      <button class="search-button">Save Details</button>
    </form>
  </div>

  <div id="LaboratoryResult" class="w3-container city"  style="display:none">
    <h2>Laboratory Result</h2>
    <form id="LaboratoryResultForm" name="LaboratoryResultForm" class="mainform">
      <label for="MID">Result ID: </label><br>
      <input type="text" id="ResultID" name="ResultID" maxlength="10" onkeypress="return onlyNumberKey(event)"/><br>
      <label for="Patient_ID">Patient ID: </label><br>
      <input type="text" id="PatientID" name="PatientID" maxlength="10" onkeypress="return onlyNumberKey(event)"/><br>

      <label for="Test_Name">Test Name: </label><br>
      <input type="text" id="TestName" name="TestName" maxlength="20"/><br>
      <label for="Test_Date">Test Date: </label><br>
      <input type="date" id="TestDate" name="TestDate"/><br>
      <label for="Test_Result">Test Result: </label><br>
      <input type="text" id="TestResult" name="TestResult" maxlength="20"/><br>
      <label for="RefRange">Reference Range: </label><br>
      <input type="text" id="ReferenceRange" name="ReferenceRange" maxlength="20"/><br>
      <label for="HPI">Ordering Healthcare Provider ID: </label><br>
      <input type="text" id="HealthcareProviderID" name="HealthcareProviderID" maxlength="10" onkeypress="return onlyNumberKey(event)"/><br>
     
      <button class="search-button">Save Details</button>
    </form>
  </div>

  <div id="ImagingStudy" class="w3-container city"  style="display:none">
    <h2>Imaging Study</h2>
    <form id="ImagingStudyForm" name="ImagingStudyForm" class="mainform">
      <label for="SID">Study ID: </label><br>
      <input type="text" id="StudyID" name="StudyID" maxlength="10" onkeypress="return onlyNumberKey(event)"/><br>
      <label for="Patient_ID">Patient ID: </label><br>
      <input type="text" id="PatientID" name="PatientID" maxlength="10" onkeypress="return onlyNumberKey(event)"/><br>

      <label for="StudType">Study Type: </label><br>
      <select id="StudyType" name="StudyType"/>
        <option value="X-Ray">X-Ray</option>
        <option value="MRI">MRI</option>
        <option value="CTScan">CT Scan</option>
        <option value="Ultrasound">Ultrasound</option>
      </select><br>
      <label for="Study_Date">Study Date: </label><br>
      <input type="date" id="StudyDate" name="StudyDate"/><br>
      <label for="Imaging_Findings">Imaging Findings: </label><br>
      <input type="text" id="ImagingFindings" name="ImagingFindings" maxlength="50"/><br>
      <label for="Intrpret">Interpretation: </label><br>
      <input type="text" id="Interpretation" name="Interpretation" maxlength="50"/><br>

      <button class="search-button">Save Details</button>
    </form>
  </div>

  <div id="Procedure" class="w3-container city"  style="display:none">
    <h2>Procedure</h2>
    <form id="ProcedureForm" name="ProcedureForm" class="mainform">
      <label for="ProcID">Procedure ID: </label><br>
      <input type="text" id="ProcedureID" name="ProcedureID" maxlength="10" onkeypress="return onlyNumberKey(event)"/><br>
      <label for="Patient_ID">Patient ID: </label><br>
      <input type="text" id="PatientID" name="PatientID" maxlength="10" onkeypress="return onlyNumberKey(event)"/><br>
      <label for="Proc_Date">Procedure Date: </label><br>
      <input type="date" id="ProcedureDate" name="ProcedureDate"/><br>
      <label for="ProcType">Procedure Type: </label><br>
      <input type="text" id="ProcedureType" name="ProcedureType" maxlength="50"/><br>
      <label for="HPI">Performing Healthcare Provider ID: </label><br>
      <input type="text" id="HealthcareProviderID" name="HealthcareProviderID" maxlength="10" onkeypress="return onlyNumberKey(event)"/><br>
      <label for="AnethDet">Anesthesia Details (if applicable): </label><br>
      <input type="text" id="AnesthesiaDetails" name="AnesthesiaDetails" maxlength="50"/><br>

      <button class="search-button">Save Details</button>
    </form>
  </div>

  <div id="Allergy" class="w3-container city"  style="display:none">
    <h2>Allergy</h2>
    <form id="AllergyForm" name="AllergyForm" class="mainform">
      <label for="AllerID">Allergy ID: </label><br>
      <input type="text" id="AllergyID" name="AllergyID" maxlength="10" onkeypress="return onlyNumberKey(event)"/><br>
      <label for="Patient_ID">Patient ID: </label><br>
      <input type="text" id="PatientID" name="PatientID" maxlength="10" onkeypress="return onlyNumberKey(event)"/><br>
      <label for="AllerName">Allergen Name: </label><br>
      <input type="text" id="AllergenName" name="AllergenName" maxlength="50"/><br>
      <label for="ReactDetails">Reaction Details: </label><br>
      <input type="text" id="ReactionDetails" name="ReactionDetails" maxlength="50"/><br>
      <label for="SevType">Severity: </label><br>
      <select id="Severity" name="Severity"/>
        <option value="Critical">Critical</option>
        <option value="High">High</option>
        <option value="Tolerable">Tolerable</option>
        <option value="Low">Low</option>
      </select><br>

      <button class="search-button">Save Details</button>
    </form>
  </div>

  <div id="Immunization" class="w3-container city"  style="display:none">
    <h2>Immunization</h2>
    <form id="ImmunizationForm" name="ImmunizationForm" class="mainform">
      <label for="ImmunID">Immunization ID: </label><br>
      <input type="text" id="ImmunizationID" name="ImmunizationID" maxlength="10" onkeypress="return onlyNumberKey(event)"/><br>
      <label for="Patient_ID">Patient ID: </label><br>
      <input type="text" id="PatientID" name="PatientID" maxlength="10" onkeypress="return onlyNumberKey(event)"/><br>
      <label for="VaccName">Vaccine Name: </label><br>
      <input type="text" id="VaccineName" name="VaccineName" maxlength="50"/><br>
      <label for="Admin_Date">Administration Date: </label><br>
      <input type="date" id="AdministrationDate" name="AdministrationDate"/><br>
      
      <label for="Dos">Dose: </label><br>
      <input type="text" id="Dose" name="Dose" maxlength="10" onkeypress="return onlyNumberKey(event)"/><br>
      <label for="RouteOfAdmin">Route of Administration: </label><br>
      <input type="text" id="RouteOfAdministration" name="RouteOfAdministration" maxlength="50"/><br>
      <label for="VaccInfo">Vaccinator Information: </label><br>
      <input type="text" id="VaccinatorInformation" name="VaccinatorInformation" maxlength="50"/><br>

      <button class="search-button">Save Details</button>
    </form>
  </div>



  <script>
    function onlyNumberKey(evt) {
          
        // Only ASCII character in that range allowed
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }

    function openScreen(cityName) {
      var i;
      var x = document.getElementsByClassName("city");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      document.getElementById(cityName).style.display = "block";  
    }
  </script>
</body>
</html>