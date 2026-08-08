<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Information | ITST 302</title>

    <style>
        /* =========================================
           GENERAL PAGE
        ========================================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 40px 20px;

            font-family: Arial, Helvetica, sans-serif;

            background:
                radial-gradient(
                    circle at top left,
                    #b2dfdb 0%,
                    transparent 35%
                ),
                linear-gradient(
                    135deg,
                    #e0f7fa,
                    #f5fffd
                );

            color: #173b35;
        }


        /* =========================================
           MAIN CARD
        ========================================= */

        .student-card {
            width: 100%;
            max-width: 850px;

            background: #ffffff;

            border-radius: 24px;

            overflow: hidden;

            border: 1px solid rgba(0, 121, 107, 0.12);

            box-shadow:
                0 25px 60px rgba(0, 77, 64, 0.15),
                0 5px 20px rgba(0, 0, 0, 0.05);

            transition: all 0.3s ease;
        }

        .student-card:hover {
            transform: translateY(-6px);

            box-shadow:
                0 35px 75px rgba(0, 77, 64, 0.20),
                0 8px 25px rgba(0, 0, 0, 0.07);
        }


        /* =========================================
           HEADER
        ========================================= */

        .student-card-header {
            position: relative;

            display: flex;
            align-items: center;

            gap: 20px;

            padding: 38px 42px;

            color: white;

            background:
                linear-gradient(
                    135deg,
                    #004d40 0%,
                    #00695c 50%,
                    #00897b 100%
                );

            overflow: hidden;
        }


        /* Decorative circles */

        .student-card-header::before {
            content: "";

            position: absolute;

            width: 220px;
            height: 220px;

            right: -80px;
            top: -100px;

            border-radius: 50%;

            background: rgba(255, 255, 255, 0.08);
        }

        .student-card-header::after {
            content: "";

            position: absolute;

            width: 120px;
            height: 120px;

            right: 80px;
            bottom: -80px;

            border-radius: 50%;

            background: rgba(255, 255, 255, 0.06);
        }


        /* =========================================
           HEADER ICON
        ========================================= */

        .header-icon {
            position: relative;
            z-index: 2;

            width: 68px;
            height: 68px;

            display: flex;
            align-items: center;
            justify-content: center;

            flex-shrink: 0;

            border-radius: 18px;

            font-size: 32px;

            background: rgba(255, 255, 255, 0.15);

            border: 1px solid rgba(255, 255, 255, 0.25);

            backdrop-filter: blur(10px);

            box-shadow:
                0 10px 25px rgba(0, 0, 0, 0.15);
        }


        /* =========================================
           HEADER TEXT
        ========================================= */

        .header-text {
            position: relative;
            z-index: 2;
        }

        .header-label {
            margin-bottom: 6px;

            font-size: 11px;

            font-weight: bold;

            letter-spacing: 2px;

            opacity: 0.75;
        }

        .header-text h1 {
            margin: 0;

            font-size: 29px;

            font-weight: 700;

            letter-spacing: -0.5px;
        }

        .header-subtitle {
            margin-top: 7px;

            font-size: 13px;

            opacity: 0.82;
        }


        /* =========================================
           STUDENT DETAILS
        ========================================= */

        .student-details {
            padding: 15px 42px 25px;
        }


        /* =========================================
           INFORMATION ROW
        ========================================= */

        .info-row {
            display: flex;
            align-items: center;

            gap: 18px;

            padding: 20px 10px;

            border-bottom: 1px solid #edf2f1;

            transition: all 0.25s ease;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-row:hover {
            padding-left: 18px;

            background: #f6fbfa;

            border-radius: 13px;
        }


        /* =========================================
           INFORMATION ICON
        ========================================= */

        .info-icon {
            width: 46px;
            height: 46px;

            display: flex;
            align-items: center;
            justify-content: center;

            flex-shrink: 0;

            border-radius: 13px;

            background: #e7f5f2;

            font-size: 20px;

            transition: all 0.25s ease;
        }

        .info-row:hover .info-icon {
            transform: scale(1.08);

            background: #d4eee9;
        }


        /* =========================================
           INFORMATION TEXT
        ========================================= */

        .info-content {
            display: flex;

            flex-direction: column;

            gap: 4px;
        }

        .info-label {
            font-size: 10px;

            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: 1.2px;

            color: #7a8a87;
        }

        .info-content strong {
            font-size: 16px;

            font-weight: 600;

            color: #173b35;
        }


        /* =========================================
           FOOTER
        ========================================= */

        .student-card-footer {
            display: flex;
            align-items: center;

            gap: 10px;

            padding: 18px 42px;

            background: #f7faf9;

            border-top: 1px solid #edf2f1;

            font-size: 12px;

            font-weight: 600;

            color: #61716d;
        }


        /* Green status indicator */

        .status-dot {
            width: 9px;
            height: 9px;

            border-radius: 50%;

            background: #00a884;

            box-shadow:
                0 0 0 4px rgba(0, 168, 132, 0.12);
        }


        /* Footer divider */

        .footer-divider {
            width: 1px;
            height: 16px;

            background: #d8e3e0;

            margin: 0 5px;
        }


        /* =========================================
           MOBILE RESPONSIVE
        ========================================= */

        @media (max-width: 600px) {

            body {
                padding: 20px 12px;
            }

            .student-card {
                border-radius: 18px;
            }

            .student-card-header {
                padding: 28px 22px;

                gap: 15px;
            }

            .header-icon {
                width: 52px;
                height: 52px;

                font-size: 24px;

                border-radius: 14px;
            }

            .header-text h1 {
                font-size: 22px;
            }

            .header-subtitle {
                font-size: 11px;
            }

            .student-details {
                padding: 10px 20px 20px;
            }

            .info-row {
                gap: 13px;

                padding: 16px 5px;
            }

            .info-row:hover {
                padding-left: 10px;
            }

            .info-icon {
                width: 40px;
                height: 40px;

                font-size: 17px;
            }

            .info-content strong {
                font-size: 14px;
            }

            .student-card-footer {
                padding: 15px 20px;

                font-size: 11px;
            }
        }
    </style>
</head>

<body>

    <!-- =========================================
         STUDENT INFORMATION CARD
    ========================================= -->

    <div class="student-card">

        <!-- HEADER -->
        <div class="student-card-header">

            <div class="header-icon">
                🎓
            </div>

            <div class="header-text">

                <p class="header-label">
                    ACADEMIC PROFILE
                </p>

                <h1>
                    Student Information
                </h1>

                <p class="header-subtitle">
                    Student credentials and academic details
                </p>

            </div>

        </div>


        <!-- STUDENT DETAILS -->
        <div class="student-details">


            <!-- STUDENT NAME -->
            <div class="info-row">

                <div class="info-icon">
                    👤
                </div>

                <div class="info-content">

                    <span class="info-label">
                        Student Name
                    </span>

                    <strong>
                        Angelo Cayago
                    </strong>

                </div>

            </div>


            <!-- STUDENT NUMBER -->
            <div class="info-row">

                <div class="info-icon">
                    🪪
                </div>

                <div class="info-content">

                    <span class="info-label">
                        Student Number
                    </span>

                    <strong>
                        0124-2588
                    </strong>

                </div>

            </div>


            <!-- COURSE -->
            <div class="info-row">

                <div class="info-icon">
                    💻
                </div>

                <div class="info-content">

                    <span class="info-label">
                        Course
                    </span>

                    <strong>
                        BS Information Technology
                    </strong>

                </div>

            </div>


            <!-- SECTION -->
            <div class="info-row">

                <div class="info-icon">
                    🏫
                </div>

                <div class="info-content">

                    <span class="info-label">
                        Section
                    </span>

                    <strong>
                        3-A
                    </strong>

                </div>

            </div>


            <!-- SUBJECT -->
            <div class="info-row">

                <div class="info-icon">
                    📚
                </div>

                <div class="info-content">

                    <span class="info-label">
                        Subject
                    </span>

                    <strong>
                        ITST 302
                    </strong>

                </div>

            </div>


            <!-- CURRENT DATE -->
            <div class="info-row">

                <div class="info-icon">
                    📅
                </div>

                <div class="info-content">

                    <span class="info-label">
                        Current Date
                    </span>

                    <strong>
                        August 8, 2026
                    </strong>

                </div>

            </div>

        </div>


        <!-- FOOTER -->
        <div class="student-card-footer">

            <span class="status-dot"></span>

            <span>
                Currently Enrolled
            </span>

            <span class="footer-divider"></span>

            <span>
                ITST 302
            </span>

        </div>

    </div>

</body>
</html>