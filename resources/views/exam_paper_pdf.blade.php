<html>
<body>
<div style="text-align: center;">
    <img alt="" src="{{ $logo }}" style="height:50px; text:center; width:120px; display: inline-block;" />
</div>

<hr style="border-color: #313180;" />
<h2 style="text-align: center;"><strong>Exam Paper Ref No: {{ $ref_number }}</strong></h2>
<hr style="border-color: #313180;" />
<p>&nbsp;</p>

<table style="border-collapse: collapse; width: 640px; border: 1px solid #ffffff; background-color: #ffffff;">
    <tbody>
    @foreach(\App\Models\ExamPaper::where('ref_number', $ref_number)->get() as $exam)
        <tr>
            <td style="border: 1px solid #ffffff; padding: 8px; width: 370px; font-weight: bold; margin-bottom: 40px; margin-top: 40px;">{{ $loop->iteration }}. {{ $exam->question }}</td>
        </tr>
        <tr>
            <td><div>{{ $exam->option_a }}</div></td>
            <td><div>{{ $exam->option_b }}</div></td>
        </tr>
        <tr>
            <td><div>{{ $exam->option_c }}</div></td>
            <td><div>{{ $exam->option_d }}</div></td>
        </tr>
    @endforeach
    </tbody>
</table>
<h4 style="text-align: center;"><strong>END OF PAPER</strong></h4>
<p>&nbsp;</p>

<hr />
<p>&nbsp;</p>


<p>&nbsp;</p>
</body>
</html>
