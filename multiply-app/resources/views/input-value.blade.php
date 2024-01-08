<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('mystyle.css') }}" />
    </head>
    <body>
    <section>
        <div class="outside-border">
            <div class="silencer"></div>
            <div class="volume-up"></div>
            <div class="volume-down"></div>
            <div class="button-on"></div>
            <div class="inside-border">

                <!-- Camera -->

                <div class="camera">
                    <div class="camera-dot">
                        <div class="camera-dot-2"></div>
                        <div class="camera-dot-3"></div>
                    </div>
                    <div class="camera-speaker">
                    </div>
                </div>

                <!-- Lock -->

                <div class="lock">
                    <div class="lock-locked"></div>
                </div>

                <!-- Time -->

                <div class="time"><?php echo "ใส่ตัวเลขที่ต้องการ" ?></div>



                <!-- Battery and Signal -->

                <div class="t-r-info">
                    <div class="dots">...</div>
                    <div class="battery">
                        <div class="bar"></div>
                        <div class="dot"></div>
                    </div>
                </div>

                <!-- Date -->

                <div class="date">
                    <form method="post" action="/multi_table">
                        @csrf
                        <input type="text" name="num_input"/>
                        <button type="submit">บันทึก</button>
                    </form>
                </div>


                <!-- Torch -->

                <div class="torch-outter">
                    <div class="light"></div>
                    <div class="top"></div>
                    <div class="switch-top"></div>
                    <div class="switch-section"></div>
                    <div class="switch">
                        <div class="dot"></div>
                    </div>
                </div>

                <!-- Camera -->

                <div class="camera-outter">
                    <div class="box"></div>
                    <div class="eye"></div>
                    <div class="circle"></div>
                    <div class="dot"></div>
                </div>

                <!-- Bottom Line -->

              <div class="bottom-line"></div>

            </div>
        </div>
    </section>

    </body>
</html>
