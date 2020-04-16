<style type="text/css">
    #my_centered_buttons { display: flex; justify-content: center; }

    #success_button {
        margin-top: 93px;
        font-size: 20px;
        border: 1px solid #218838;
        background: #218838;
        padding: 20px;
        border-radius: 10px;
        color: white;
        cursor: pointer;
    }

    #danger_button {
        margin-top: 93px;
        font-size: 20px;
        border: 1px solid #C82333;
        background: #C82333;
        padding: 20px;
        border-radius: 10px;
        cursor: pointer;
        color: white;
    }
    </style>
<div id="my_centered_buttons">
    <form name="thisForm">
        @if ($status == 1)
            <button type="button" id="success_button"  onclick="returnYourChoice('yes')" >Click To Continew</button>
        @else 
            <button type="button" id="danger_button"  onclick="returnYourChoice('no')" >Click To Continew</button>
        @endif
    </form>
</div>
<script>
    // return the value to the parent window
    function returnYourChoice(choice){
        opener.setSearchResult(choice);
        window.close();
    }
</script>
