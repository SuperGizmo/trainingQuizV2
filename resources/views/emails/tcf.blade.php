Hi {{ config('site.ADMIN_NAME')}},<br />
<br />
{{ $name }} has submitted the Treating Customers Fairly Training Quiz. Please see their details and answers below:<br />
<br />
Name: {{ $name }}<br />
Email: {{ $email }}<br />
Contact Number: {{ $contactNumber }}<br />
Company: {{ $company }}<br />
Address: {{ $address }}<br />
Position: {{ $position }}<br />
<br />
Percentage: {{ $percent }}%<br />
Rating: {{ $status }}<br /><br />
<ul>
    <?php
        foreach(json_decode($questions) as $question){
            echo "<li>";
                echo $question->question."<br />";
                echo "Answer Number: ".$question->answer_number;
                echo "<ol>";
                    foreach($question->answers as $k => $answer){
                        echo "<li>".$answer->answer."</li>";
                    }
                echo "</ol>";
            echo "</li>";
        }
    ?>
</ul><br />
Certificate Download: <a href="{{ $pdf }}">here</a><br />
If the above link does not work, copy and paste this link {{ $pdf }}