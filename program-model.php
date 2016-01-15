<?php
$pagename = 'Program Model';
include("template-top.php");
?>
<div id="content" class="row">
    <div class="columns">
        <h1><?php echo $pagename; ?></h1>
        <p>This model uses a team-based approach to include nursing, pharmacy, and social work staff to address complex
            medical and social problems. The central tenet of this model is the use of LPN’s and pharmacy technicians as
            community health workers, serving as both nurse and pharmacist extenders, obtaining medication histories,
            assisting in medication reconciliation and identification of potential drug therapy problems (DTP), and
            reinforcing medication education previously provided by the pharmacist and APN/RN per protocol. Community
            training included patient communication skills, motivational interviewing, medication history taking,
            teach-back techniques, drug disposal practices, and basic disease management. </p>
        <p>The core of the intervention lasts a total of 45 days as follows:</p>
        <table>
            <thead>
            <tr>
                <th class="text-center">Timing (Week post-discharge)</th>
                <th class="text-center">Activities</th>
                <th class="text-center">Lead Staff*</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td colspan="3"><h3 class="text-center">Hospital-based</h3></td>
            </tr>
            <tr>
                <td rowspan="5" class="text-center">0</td>
            </tr>
            <tr>
                <td>Real time in-hospital identification, screening and enrollment of eligible patients</td>
                <td>NP, RN</td>
            </tr>
            <tr>
                <td>Introduction of SafeMed team, patient engagement, and establishing relationship between patient and
                    SafeMed team members
                </td>
                <td>All SafeMed staff</td>
            </tr>
            <tr>
                <td>Medication reconciliation and medication therapy management</td>
                <td>PharmD</td>
            </tr>
            <tr>
                <td>Enhanced discharge preparation, planning, education, and care coordination with outpatient providers
                    and community resources
                </td>
                <td>NP, PharmD, RN, SW</td>
            </tr>
            <tr>
                <td colspan="3"><h3 class="text-center">Community-based</h3></td>
            </tr>
            <tr>
                <td class="text-center">1</td>
                <td><p>1st Home Visit within 72 hours of discharge</p>
                    <ul>
                        <li>Symptom and physical assessment</li>
                        <li>Medication reconciliation</li>
                        <li>Medication therapy management</li>
                        <li>Identify and address social needs</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>LPN-CHW</li>
                        <li>CPhT-CHW</li>
                        <li>PharmD (remote)</li>
                        <li>SW (as needed)</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td class="text-center">2</td>
                <td>Phone Follow-up and Care Coordination to ensure PCP follow-up within 14 days of enrollment</td>
                <td>NP, PharmD, LPN-CHW, and CPhT-CHW</td>
            </tr>
            <tr>
                <td class="text-center">3</td>
                <td><p>2nd Home Visit</p>
                    <ul>
                        <li>Symptom and physical assessment</li>
                        <li>Medication reconciliation</li>
                        <li>Medication therapy management</li>
                        <li>Identify and address social needs</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>LPN-CHW</li>
                        <li>CPhT-CHW</li>
                        <li>PharmD (remote)</li>
                        <li>SW (as needed)</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td class="text-center">4</td>
                <td>30-day Phone Follow-up</td>
                <td>LPN-CHW and CPhT-CHW</td>
            </tr>
            <tr>
                <td class="text-center">5</td>
                <td>Comprehensive Medication Review (30-45 days after enrollment)</td>
                <td>PharmD (CPhT-CHW to schedule)</td>
            </tr>
            <tr>
                <td class="text-center">6</td>
                <td>SafeMed Support Session</td>
                <td>All SafeMed staff</td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3" class="panel">* The following abbreviations are used for lead SafeMed staff categories:
                    Nurse Practitioner (NP), Registered Nurse (RN), Pharmacist (PharmD), Social Worker (SW), Licensed
                    Practical Nurse–Community Health Worker (LPN-CHW), Certified Pharmacy Technician–Community Health
                    Worker (CPhT-CHW).
                </td>
            </tr>
            </tfoot>
        </table>
        <h2>Documents</h2>
        <div class="row">
            <div class="columns medium-4">
                <h3>General</h3>
                <ul>
                    <li><a class="link-word" href="documents/safemed-protocols-and-procedures.docx">Protocols and Procedures</a></li>
                    <li><a class="link-pdf" href="documents/safemed-recruitment-material.pdf">Recruitment Material</a></li>
                </ul>
            </div>
            <div id="job-descriptions" class="columns medium-4">
                <h3>Job Descriptions</h3>
                <ul>
                    <li><a class="link-word" href="documents/safemed-community-health-lpn-job-description.docx">Community Health LPN</a></li>
                    <li><a class="link-word" href="documents/safemed-community-health-pharm-tech-job-description.docx">Community Health Pharm Tech</a></li>
                    <li><a class="link-word" href="documents/safemed-nurse-leader-job-description.docx">Nurse Leader</a></li>
                    <li><a class="link-word" href="documents/safemed-pharmacist-leader-job-description.docx">Pharmacist Leader</a></li>
                    <li><a class="link-word" href="documents/safemed-physician-leader-job-description.docx">Physician Leader</a></li>
                </ul>
            </div>
            <div id="staff-training" class="columns medium-4">
                <h3>Staff Training</h3>
                <ul>
                    <li><a class="link-pdf" href="documents/safemed-ix-a-safe-med-program-mh-tools-by-dr-jordan.pdf">IX_a SAFE MED Program MH Tools by Dr Jordan</a></li>
                    <li><a class="link-ppt" href="documents/safemed-model-overview-memphis-experience.pptx">Model Overview-Memphis Experience</a></li>
                    <li><a class="link-word" href="documents/safemed-training-manual.docx">Training Manual</a></li>
                </ul>

            </div>
        </div>
    </div>
</div>
<?php include("template-bottom.php"); ?>
