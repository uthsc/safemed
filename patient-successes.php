<?php
$pagename = 'Patient Success Stories';
include("template-top.php");
?>
<div id="content" class="row">
    <div class="columns">
        <h1><?php echo $pagename; ?></h1>
        <h2>Case Presentation</h2>
        <p>
            Mr. H. is a 58 year old patient who has a driving diagnosis of CAD and was enrolled during
            admission for AICD firing (reported in conjunction with sexual activity). Following program exit, Mr. H was
            a
            victim of assault and battery (hospitalized with two broken arms) which led to situational housing
            instability
            and ongoing medical issues. Our team continued to work with Mr. H to stabilize his condition.
            Medical History: Mr. H also has chronic kidney disease, hypertension, peripheral vascular disease, and hx of
            stroke in 2003. He has a left ventricular ejection fraction <40%. He sees a PCP at the X clinic in addition
            to
            two different cardiologists. Per his Patient Centered Care Questionnaire, he reports getting conflicted
            information from providers and does not feel he can talk to a care provider about what makes it difficult to
            follow medical advice. He has a history of negative healthcare experiences. Mr. H. has poor relationship
            with
            his United Health Case Manager. During home visit, he had only fair comprehension of self-management care
            guidelines upon teach back. Mr. H may have some cognitive deficit but functions well independently for the
            most
            part.
        </p>
        <h2>Social History</h2>
        <p>
            Mr. H has a history of depression and cocaine use. He is currently abstinent from cocaine use,
            largely as a result of his stroke in 2003. Upon enrollment, he reported no symptoms of major
            depressive/anxiety
            disorders and reports low levels of alcohol use. He is divorced and currently has a significant other. He
            has a
            strong relationship with his sister who lives in X assisted living and a strained relationship with a
            brother.
            Social risk factor screening indicates low to moderate social support. Mr H. regularly attends church
            services.
            His housing preference is a boarding house but has moved 4 times due to violence, unsanitary conditions, and
            discomfort as a house guest in a non-family member’s home. He relies primarily on significant other for
            transportation and reports difficulty using TennCare transportation due to driver being late or not getting
            picked back up. Mr. H has Medicaid and receives SSI for disability. He has reported cost as a barrier to
            medication adherence during social work consult.
        </p>
        <h2>Patient Goals</h2>
        <p>
            Upon home visit, patient identified goal to follow through on outpatient medical appointment
            follow up, with secondary diet & exercise goals.
        </p>
        <p>
            Based on the needs and challenges identified, an ongoing comprehensive and coordinated care plan evolved.
            Staff
            improved the patient-provider relationship by attending the outpatient follow-up visit. The patient was more
            comfortable discussing issues around his AICD firing although the nurse practitioner did not resolve the
            issue.
            Despite unsuccessful attempts to consult the patient’s cardiologist for medical advisement around AICD
            firing, a
            SafeMed consulting cardiothoracic surgeon advised a follow up visit with a cardiologist to fine tune the
            device
            in response to patient’s activity level; hence, avoiding unnecessary shocks. In addition, our staff
            encouraged
            communication between the patient and his external (insurer) case manager resulting in assistance with
            medications and homemaker services. Our staff also undertook great efforts to stabilize the patient’s
            housing
            situation and he is now living in a boarding home in a familiar (and safer) neighborhood. Mr. H. is now
            walking
            in his neighborhood and doing rehabilitation exercises. The patient is encouraged to continue to participate
            in
            monthly peer support group sessions and has been referred for chronic disease self-management education.
        </p>
        <iframe align="center" width="100%" style="width: 60vw; height: 30vw; max-width: 100%; max-height: 547px;
        margin: 11px auto; display: block;"
                src="https://www.youtube.com/embed/m7eYs9B0E8s?rel=0&amp;showinfo=0" frameborder="0"
                allowfullscreen></iframe>
        <?php // include ("includes/mr-h-story.php"); ?>
    </div>
</div>
</div>
</div>
<?php include("template-bottom.php"); ?>

<script type="text/javascript">
    /*-- SHOW/HIDE FAQs transcriptS --*/
    $(document).ready(function () {
        $("div.transcript").css({display: "none"});

        $("#showall").click(function () {
            $("div.transcript").fadeIn("slow");
        });

        $("#hideall").click(function () {
            $("div.transcript").fadeOut("slow");
        });

        $(".read-transcript").click(function () {
            //split allows for more classes than just two, put read-transcript first then id
            var myclass = $(this).attr("class").split(' ');
            if ($("#" + myclass[1]).is(":hidden")) {
                $("#" + myclass[1]).fadeIn("slow");
            } else {
                $("#" + myclass[1]).fadeOut("slow");
            }
        });
    });
</script>

<style type="text/css" media="print">
    div.transcript {
        display: block !important;
    }
</style>