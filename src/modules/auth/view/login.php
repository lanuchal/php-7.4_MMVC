<div
    class="relative flex min-h-screen items-center justify-center bg-cover bg-center bg-no-repeat px-20 py-10 dark:bg-[#060818] sm:px-2">

    <div
        class="relative w-full max-w-[550px] rounded-md bg-[linear-gradient(45deg,#fff9f9_0%,rgba(255,255,255,0)_25%,rgba(255,255,255,0)_75%,_#fff9f9_100%)] p-2 dark:bg-[linear-gradient(52.22deg,#0E1726_0%,rgba(14,23,38,0)_18.66%,rgba(14,23,38,0)_51.04%,rgba(14,23,38,0)_80.07%,#0E1726_100%)]">
        <div
            class="relative flex flex-col justify-center rounded-md bg-white/60 backdrop-blur-lg dark:bg-black/50 px-6 lg:min-h-[500px] py-20">

            <div class="mx-auto w-full max-w-[440px]">
                <div class="flex items-center mb-8">
                    <div class="me-4">
                        <img src="/assets/favicon.png" alt="" class="min-h-24 h-24">
                    </div>
                    <div class="">
                        <h1 class="text-3xl font-extrabold uppercase !leading-snug text-primary md:text-4xl">เข้าสู่ระบบ</h1>
                        <p class="text-base font-bold leading-normal text-white-dark mt-2">กรอกรหัสผู้ใช้งานและรหัสผ่านเพื่อเข้าสู่ระบบ</p>
                    </div>
                </div>
                <!-- <form class="space-y-5 dark:text-white" action="/dashboard/sale"> -->
                <div>
                    <!-- <label for="UserID">รหัสผู้ใช้งาน</label> -->
                    <div class="relative text-white-dark">
                        <input id="UserID" type="text" placeholder="กรอกรหัสผู้ใช้งาน"
                            class="form-input ps-10 placeholder:text-white-dark" />
                        <span class="absolute start-4 top-1/2 -translate-y-1/2">
                            <i class="bx bxs-user mt-2/3"></i>
                        </span>
                    </div>
                </div>
                <div>
                    <!-- <label for="Password">รหัสผ่าน</label> -->
                    <div class="relative text-white-dark">
                        <input id="Password" type="password" placeholder="กรอกรหัสผ่าน"
                            class="form-input ps-10 placeholder:text-white-dark" />
                        <span class="absolute start-4 top-1/2 -translate-y-1/2">
                            <i class="bx bxs-lock"></i>
                        </span>
                    </div>
                </div>
                <a href="/dashboard/sale" class="btn btn-primary !mt-6 w-full border-0 uppercase shadow-[0_10px_20px_-10px_rgba(67,97,238,0.44)]">
                    เข้าสู่ระบบ
                </a>
                <!-- <button type="submit"
                    class="btn btn-primary !mt-6 w-full border-0 uppercase shadow-[0_10px_20px_-10px_rgba(67,97,238,0.44)]">
                    เข้าสู่ระบบ
                </button> -->
                <!-- </form> -->
            </div>
        </div>
    </div>
</div>