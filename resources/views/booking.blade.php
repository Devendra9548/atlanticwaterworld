@extends('includes.main')
@section('title')
Ticket Booking | Atlantic Water World
@endsection
@section('header')
<link rel="stylesheet" href="/assets/css/style.css" />
<link rel="stylesheet" href="/assets/css/home.css" />
<link rel="stylesheet" href="/assets/css/booking.css" />
@endsection
@section('body')
<x-header />
<x-herosection hero="1" heroheading="" heropara="" heading="Ticket Booking" />

<section class="form-section p-2 p-md-5">
    <div class="container-fluid py-5">
        <div class="bg-layer-green">
            <form action="" id="bookNowForm">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-4" data-aos="fade-left">
                        <div class="first">
                            <div class="option">
                                <input type="radio" id="regular" name="ticket" value="Regular Ticket" checked>
                                <label for="regular">Regular Ticket <span class="icon icon-left">▶</span><span
                                        class="icon icon-down">▼</span></label>
                            </div>
                            <div class="option">
                                <input type="radio" id="picnic" name="ticket" value="Day Picnic">
                                <label for="picnic">Day Picnic <span class="icon icon-left">▶</span><span
                                        class="icon icon-down">▼</span></label>
                            </div>
                            <div class="option">
                                <input type="radio" id="midnight" name="ticket" value="Midnight Offer">
                                <label for="midnight">Midnight Offer <span class="icon icon-left">▶</span><span
                                        class="icon icon-down">▼</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4" data-aos="fade-top">
                        <div class="white-layer">
                            <div class="second">
                                <ul>
                                    <li><span class="dot">.</span>Date of Visit</li>
                                </ul>
                                {{-- For Adults --}}
                                <div class="date-picker" id="datePicker">
                                    <input type="date" id="dateInput" class="date-input" name="pickupdate"
                                        onchange="finalDate(this.value)" required>
                                </div>
                                <ul>
                                    <li class="py-3 li-maker" style="display: flex;align-items: center;"><span
                                            class="dot">.</span>Adults
                                        <div class="number-input">
                                            <input type="number" id="quantity" class="input-box" value="0" min="0"
                                                name="noofadults" readonly required>
                                            <button type="button" class="btn minus minus11"
                                                onclick="adulstsFunDecrement(this,'first')">-</button>
                                            <button type="button" class="btn plus"
                                                onclick="adulstsFunInc(this,'first')">+</button>
                                        </div>
                                    </li>

                                </ul>
                                <div class="rs-card">
                                    <p>Above 122cm & Below 60 Years</p>
                                    <p>Price/Ticket: <b>₹ 1399.00</b></p>
                                    <p>Total Price: <b>₹</b><b id="totalPrice-adults"> 0</b></p>
                                    <input type="hidden" id="totalPrice-adults-val" name="totalPrice_adults_val">
                                </div>
                                <hr class="w-95-hr">

                                {{-- For Children --}}
                                <ul>
                                    <li class="py-3 li-maker" style="display: flex;align-items: center;"><span
                                            class="dot">.</span>Children
                                        <div class="number-input">
                                            <input type="number" id="quantity1" class="input-box" value="0" min="0"
                                                name="noofchildren" readonly required>
                                            <button type="button" class="btn minus1"
                                                onclick="adulstsFunDecrement(this,'second')">-</button>
                                            <button type="button" class="btn plus1"
                                                onclick="adulstsFunInc(this,'second')">+</button>
                                        </div>
                                    </li>

                                </ul>
                                <div class="rs-card">
                                    <p>90cm-122cm</p>
                                    <p>Price/Ticket: <b>₹ 1099.00</b></p>
                                    <p>Total Price: <b>₹</b><b id="totalPrice-children"> 0</b></p>
                                    <input type="hidden" id="totalPrice-children-val" name="totalPrice_children_val">
                                </div>
                                <hr class="w-95-hr">

                                {{-- For Sr. Citizens --}}
                                <ul>
                                    <li class="py-3 li-maker" style="display: flex;align-items: center;"><span
                                            class="dot">.</span>Sr. Citizens
                                        <div class="number-input">
                                            <input type="number" id="quantity2" class="input-box" value="0" min="0"
                                                name="noofcitizens" readonly required>
                                            <button type="button" class="btn minus2"
                                                onclick="adulstsFunDecrement(this,'third')">-</button>
                                            <button type="button" class="btn plus2"
                                                onclick="adulstsFunInc(this,'third')">+</button>
                                        </div>
                                    </li>

                                </ul>
                                <div class="rs-card">
                                    <p>(Above 60 years)</p>
                                    <p>Price/Ticket: <b>₹ 1099.00</b></p>
                                    <p>Total Price: <b>₹</b><b id="totalPrice-scitizens"> 0</b></p>
                                    <input type="hidden" id="totalPrice-scitizens-val" name="totalPrice_scitizens_val">
                                </div>
                                <hr class="w-95-hr">

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4" data-aos="fade-right">
                        <div class="third">
                            <div class="checkout">
                                <h3 class="text-center mb-4 h3-first">Enter Promo Code</h3>
                                <div class="promo-label">
                                    <input type="text" placeholder="PROMO CODE">
                                    <button type="button">Apply</button>
                                </div>
                                <h3 class="text-center mt-4 mb-5">SUMMARY</h3>
                                <ul>
                                    <li class="d-flex justify-content-between">
                                        <div class="data-left">
                                            <span class="tdot">.</span>Date of Visit
                                        </div>
                                        <div class="data-right" id="datevisit"></div>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <div class="data-left">
                                            <span class="tdot">.</span>Total Visitors
                                        </div>
                                        <div class="data-right" id="totalvisitors">
                                            0
                                        </div>
                                        <input type="hidden" name="totalvisitorsVal" id="totalvisitorsVal">
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <div class="data-left">
                                            <span class="tdot">.</span>Tickets Price:
                                        </div>
                                        <div class="data-right">
                                            ₹ <span id="totalPriceCal">0</span>
                                            <input type="hidden" id="totalPriceCalval" name="totalPriceCalval">
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <div class="data-left">
                                            <span class="tdot">.</span>Discount:
                                        </div>
                                        <div class="data-right">
                                            ₹ 0
                                        </div>
                                    </li>
                                </ul>
                                <p class="total-price">TOTAL PRICE: ₹ <span id="finalPrice">0</span></p>
                                <input type="hidden" id="finalPriceVal">
                                <p style="font-size:14px">Inclusive of all taxes.</p>
                                <input type="submit" value="Place Order" class="btn-orange-2">
                                <img src="/assets/imgs/spinner.gif" alt="" width="26px" id="CtSpinner">
                                <p id="messagehere">Thank you for your Booking.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
            <hr class="full-width-hr">
            <p class="notes-text">Atlantic Water World is a wonderful place to spend time with your family and friends. It is conveniently
                accessible and is located adjacent to the Kalindi Kunj Metro Station in Kalindi Kunj Park, New Delhi. It
                is the best water park in Delhi NCR situated amongst lush greenery and a perfect weekend destination.
            </p>
        </div>
    </div>

</section>

<section class="notes">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-10 bg-blue p-4 pt-5 p-md-5">
                <h3>Please Note:</h3>
                <ul>
                    <li>Only nylon & lycra swimwear are allowed on ride/slide.</li>
                    <li>Any form of jewellery, wearable accessories and loose item are not allowed on rides/slide.</li>
                    <li>Atlantic Water World Park Rules and Regulations Apply.</li>
                    <li>Terms and conditions of Atlantic Water World shall be applicable.</li>
                    <li>No Refund, Cancellation or Date Change request will be entertained.</li>
                    <li>Two offers can't be clubbed together.</li>
                    <li>Atlantic Water World further reserves the right to alter any and or all fees from time to time,
                        without notice.</li>
                    <li>If you violate any of the offer terms, the offer will be invalid.</li>
                    <li>Right of Admission reserved by the Management.</li>
                    <li>Once the ticket has been issued, Atlantic Water World shall not entertain any cancellation or
                        amendment requests.</li>
                    <li>Limited period offer.</li>
                </ul>
                <p>Come, get immersed in the refreshing splash of water with water slides and Family Pool in Atlantic
                    Water World, a place filled with wonder, fun, and adventure.</p>
            </div>
        </div>
    </div>
</section>


<x-footer />

<script>
document.addEventListener("DOMContentLoaded", function() {
    const options = document.querySelectorAll(".option");

    options.forEach(option => {
        const input = option.querySelector("input[type='radio']");
        const iconLeft = option.querySelector(".icon-left");
        const iconDown = option.querySelector(".icon-down");

        function updateIcons() {
            options.forEach(opt => {
                const leftIcon = opt.querySelector(".icon-left");
                const downIcon = opt.querySelector(".icon-down");
                if (leftIcon && downIcon) {
                    leftIcon.style.display = "flex";
                    leftIcon.style.background = '#0A5383';
                    downIcon.style.display = "none";
                }
            });

            if (iconLeft && iconDown) {
                if (input.checked) {
                    iconLeft.style.display = "none";
                    iconDown.style.display = "flex";
                    iconDown.style.background = '#0A5383';
                }
            }
        }

        updateIcons();
        input.addEventListener("change", updateIcons);
    });
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const datePicker = document.getElementById("datePicker");
    const dateInput = document.getElementById("dateInput");

    datePicker.addEventListener("click", function() {
        dateInput.showPicker();
    });
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const inputBox = document.getElementById("quantity");
    const minusBtn = document.querySelector(".minus");
    const plusBtn = document.querySelector(".plus");

    plusBtn.addEventListener("click", function() {
        inputBox.value = parseInt(inputBox.value) + 1;
    });

    minusBtn.addEventListener("click", function() {
        if (parseInt(inputBox.value) > 0) {
            inputBox.value = parseInt(inputBox.value) - 1;
        }
    });
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const inputBox1 = document.getElementById("quantity1");
    const minusBtn1 = document.querySelector(".minus1");
    const plusBtn1 = document.querySelector(".plus1");

    plusBtn1.addEventListener("click", function() {
        inputBox1.value = parseInt(inputBox1.value) + 1;
    });

    minusBtn1.addEventListener("click", function() {
        if (parseInt(inputBox1.value) > 0) {
            inputBox1.value = parseInt(inputBox1.value) - 1;
        }
    });
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const inputBox2 = document.getElementById("quantity2");
    const minusBtn2 = document.querySelector(".minus2");
    const plusBtn2 = document.querySelector(".plus2");

    plusBtn2.addEventListener("click", function() {
        inputBox2.value = parseInt(inputBox2.value) + 1;
    });

    minusBtn2.addEventListener("click", function() {
        if (parseInt(inputBox2.value) > 0) {
            inputBox2.value = parseInt(inputBox2.value) - 1;
        }
    });
});
</script>

<script>
var totalvisitors = 1;

function checkQuantity(x, y) {
    var quantity = document.querySelector("#quantity").value;

    var quantity1 = document.querySelector("#quantity1").value;

    var quantity2 = document.querySelector("#quantity2").value;

    if ((quantity <= 0) && (y === 'first')) {
        return 0;
    }

    if ((quantity1 <= 0) && (y === 'second')) {
        return 0;
    }

    if ((quantity2 <= 0) && (y === 'third')) {
        return 0;
    } else {
        return 1;
    }

}


function checkQuantityInc(x, y) {
    var quantity = document.querySelector("#quantity").value;

    var quantity1 = document.querySelector("#quantity1").value;

    var quantity2 = document.querySelector("#quantity2").value;

    if (y === 'first') {
        return 0;
    }

    if (y === 'second') {
        return 1;
    }

    if (y === 'third') {
        return 2;
    } else {
        return 3;
    }

}

function finalDate(val) {
    document.querySelector("#datevisit").innerHTML = val;
}

var priceinc = 0;
var priceinc1 = 0;
var priceinc2 = 0;


function adulstsFunInc(x, y) {
    var val1 = document.querySelector("#quantity").value;
    var val2 = document.querySelector("#quantity1").value;
    var val3 = document.querySelector("#quantity2").value;

    totalvisitors = parseInt(val1) + parseInt(val2) + parseInt(val3) + 1;
    document.querySelector("#totalvisitors").innerHTML = totalvisitors;
    document.querySelector("#totalvisitorsVal").value = totalvisitors;

    var output = checkQuantityInc(x, y);

    if ((output == 1) && (priceinc >= 0)) {
        priceinc = document.querySelector("#totalPrice-children-val").value;
        priceinc = Number(priceinc);
        priceinc = Number(priceinc) + 1099;

        document.querySelector("#totalPrice-children").innerHTML = priceinc;
        document.querySelector("#totalPrice-children-val").value = priceinc;
        totalTicketAmount();

    }

    if ((output == 2) && (priceinc >= 0)) {
        priceinc = document.querySelector("#totalPrice-scitizens-val").value;
        priceinc = Number(priceinc);
        priceinc = Number(priceinc) + 1099;

        document.querySelector("#totalPrice-scitizens").innerHTML = priceinc;
        document.querySelector("#totalPrice-scitizens-val").value = priceinc;
        totalTicketAmount();

    }

    if ((output == 0) && (priceinc >= 0)) {
        priceinc = document.querySelector("#totalPrice-adults-val").value;
        priceinc = Number(priceinc);
        priceinc = Number(priceinc) + 1399;

        document.querySelector("#totalPrice-adults").innerHTML = priceinc;
        document.querySelector("#totalPrice-adults-val").value = priceinc;
        totalTicketAmount();

    }

}

function adulstsFunDecrement(x, y) {
    var output = checkQuantity(x, y);

    if (output == 1) {
        var val1 = document.querySelector("#quantity").value;
        var val2 = document.querySelector("#quantity1").value;
        var val3 = document.querySelector("#quantity2").value;
        totalvisitors = (parseInt(val1) + parseInt(val2) + parseInt(val3)) - 1;
        document.querySelector("#totalvisitors").innerHTML = totalvisitors;
        document.querySelector("#totalvisitorsVal").value = totalvisitors;


        if (y === 'first') {
            priceinc = document.querySelector("#totalPrice-adults-val").value;
            priceinc = priceinc - 1399;
            document.querySelector("#totalPrice-adults").innerHTML = priceinc;
            document.querySelector("#totalPrice-adults-val").value = priceinc;
            totalTicketAmount();
        }
        if (y === 'second') {
            priceinc1 = document.querySelector("#totalPrice-children-val").value;

            priceinc1 = priceinc1 - 1099;
            document.querySelector("#totalPrice-children").innerHTML = priceinc1;
            document.querySelector("#totalPrice-children-val").value = priceinc1;
            totalTicketAmount();
        }
        if (y === 'third') {
            priceinc2 = document.querySelector("#totalPrice-scitizens-val").value;
            priceinc2 = priceinc2 - 1099;
            document.querySelector("#totalPrice-scitizens").innerHTML = priceinc2;
            document.querySelector("#totalPrice-scitizens-val").value = priceinc2;
            totalTicketAmount();
        }

    }

}

function totalTicketAmount() {
    priceinc = document.querySelector("#totalPrice-children-val").value;
    priceinc2 = document.querySelector("#totalPrice-scitizens-val").value;
    priceinc3 = document.querySelector("#totalPrice-adults-val").value;

    var total = Number(priceinc) + Number(priceinc2) + Number(priceinc3);
    document.querySelector("#totalPriceCalval").value = total;
    document.querySelector("#totalPriceCal").innerHTML = total;

    document.querySelector("#finalPriceVal").value = total;
    document.querySelector("#finalPrice").innerHTML = total;



}
</script>


<script>
$(document).ready(function() {
    $("#bookNowForm").submit(function(event) {
        event.preventDefault();

        // Check if all required fields are filled
        let isValid = true;
        $("#bookNowForm input, #bookNowForm textarea, #bookNowForm select").each(function() {
            if ($(this).prop("required") && $(this).val().trim() === "") {
                isValid = false;
                $(this).css("border", "2px solid red");
            } else {
                $(this).css("border", "");
            }
        });

        if (!isValid) {
            alert("Please fill in all required fields.");
            return;
        }

        // Show spinner
        document.querySelector("#CtSpinner").style.display = "block";

        var formData = new FormData(this);
        $.ajax({
            type: "POST",
            url: "/booking-success",
            data: formData,
            contentType: false,
            processData: false,
            success: function(res) {
                document.querySelector("#CtSpinner").style.display = "none";
                if (res == true) {
                    $("#bookNowForm")[0].reset();
                    document.querySelector("#messagehere").style.display = "block";
                    setTimeout(function() {
                        location.reload();
                    }, 3000);
                } else {
                    alert("Error! " + res);
                }
            }
        });
    });
});
</script>
@endsection