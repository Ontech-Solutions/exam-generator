<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .es-wrapper {
            width: 100%;
            margin: 0 auto;
        }
        .es-content-body {
            width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
        }
        .cover-page {
            page-break-after: always; /* This ensures the cover page is followed by a new page */
        }
        .question-section {
            page-break-before: always; /* This ensures the questions start on a new page */
        }
    </style>
</head>
<body>
<!-- Cover Page Section -->
<div class="es-wrapper cover-page">
    <table class="es-content-body">
        <tbody>
        <!-- Logo and Header Section -->
        <tr>
            <td align="center">
                <img src="{{ $logo }}" alt="HPCZ Logo" style="height:50px; width:120px; display: inline-block;" />
                <h1>Health Professional Council of Zambia</h1>
                <h2>Final Examination Paper</h2>
                <h2><strong>Ref No: {{ $ref_number }}</strong></h2>
            </td>
        </tr>
        <!-- Exam Information -->
        <tr>
            <td align="center">
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
        <!-- Instructions -->
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
</div>

<!-- Question Section -->
<div class="es-wrapper question-section">
    <table style="border-collapse: collapse; width: 640px; border: 1px solid #ffffff; background-color: #ffffff;">
        <tbody>
        @foreach(\App\Models\ExamPaper::where('ref_number', $ref_number)->get() as $exam)
            <tr>
                <td style="border: 1px solid #ffffff; padding: 8px; width: 370px; font-weight: bold;">{{ $loop->iteration }}. {{ $exam->question }}</td>
            </tr>
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
