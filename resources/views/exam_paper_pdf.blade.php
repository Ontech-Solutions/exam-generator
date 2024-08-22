<html>
<body>
    <!-- Cover Page Section -->
    <div class="es-wrapper" style="page-break-after: always;">
        <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td class="esd-email-paddings" valign="top">
                        <table class="es-content esd-header-popover" cellspacing="0" cellpadding="0" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" align="center">
                                        <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                                            <tbody>
                                                <!-- Logo and Exam Header Section -->
                                                <tr>
                                                    <td class="esd-structure es-p20t es-p0b es-p20r es-p20l" align="left">
                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td align="center">
                                                                        <img src="{{ $logo }}" alt="HPCZ Logo" style="height:50px; width:120px; display: inline-block;" />
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td align="center" class="esd-block-text">
                                                                        <h1 style="font-size: 20px;">Health Professional Council of Zambia</h1>
                                                                        <h2 style="font-size: 18px;">Final Examination Paper</h2>
                                                                        <h2 style="font-size: 18px;"><strong>Ref No: {{ $ref_number }}</strong></h2>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <!-- Exam Information Section -->
                                                <tr>
                                                    <td class="esd-structure es-p20t es-p20r es-p20l" align="left">
                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td align="center" class="esd-block-text">
                                                                        <table border="2" cellspacing="1" cellpadding="5" width="100%" style="border-color:#646464;">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style="background-color: #646464; color: #ffffff;"><strong>Program Name:</strong></td>
                                                                                    <td>[Program Name]</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td style="background-color: #646464; color: #ffffff;"><strong>Examination Code:</strong></td>
                                                                                    <td>[Exam Code]</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td style="background-color: #646464; color: #ffffff;"><strong>Date of Examination:</strong></td>
                                                                                    <td>[Exam Date]</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td style="background-color: #646464; color: #ffffff;"><strong>Duration:</strong></td>
                                                                                    <td>3 Hours</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="2" style="background-color: #646464; color: #ffffff;">
                                                                                        <strong>Candidate Number:</strong>
                                                                                        <p>(Write your candidate number clearly in the designated space on the answer booklet.)</p>
                                                                                        <table border="1" width="100%" style="border-color:#646464;">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="height: 30px;">&nbsp;</td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <!-- Instructions Section -->
                                                                <tr>
                                                                    <td class="esd-block-text">
                                                                        <table border="2" cellspacing="1" cellpadding="10" width="100%" style="margin-top: 20px; border-color:#646464;">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <h4 style="text-align: center;">Instructions to Candidates</h4>
                                                                                        <ul>
                                                                                            <li>Time Allowed: You have <strong>3 hours</strong> to complete this examination.</li>
                                                                                            <li>Write your candidate number clearly on the answer booklet. Do not write your name.</li>
                                                                                            <li>Ensure you read all questions thoroughly before answering.</li>
                                                                                            <li>Use blue or black ink only; pencils are allowed for diagrams only.</li>
                                                                                            <li>Start each new question on a new page in the answer booklet.</li>
                                                                                            <li>Submit all exam materials to the invigilator before leaving.</li>
                                                                                        </ul>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Question Section -->
    <div class="es-wrapper" style="page-break-before: always;">
        <table style="border-collapse: collapse; width: 640px; border: 1px solid #ffffff; background-color: #ffffff;">
            <tbody>
                @foreach(\App\Models\ExamPaper::where('ref_number', $ref_number)->get() as $exam)
                <tr>
                    <td style="border: 1px solid #ffffff; padding: 8px; width: 370px; font-weight: bold; margin-bottom: 40px; margin-top: 40px;">{{ $loop->iteration }}. {{ $exam->question }}</td>
                </tr>
                {{-- Option Section --}}
                <tr>
                    <td>A. {{ $exam->option_a }}</td>
                </tr>
                <tr>
                    <td>B. {{ $exam->option_b }}</td>
                </tr>
                <tr>
                    <td>C. {{ $exam->option_c }}</td>
                </tr>
                <tr>
                    <td>D. {{ $exam->option_d }}</td>
                </tr>
                <tr>
                    <td>E. {{ $exam->option_e }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <h4 style="text-align: center;"><strong>END OF PAPER</strong></h4>
    </div>
</body>
</html>
