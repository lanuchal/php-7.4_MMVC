<div class="bg-dark overflow-hidden" id="sidebar-wrapper">
    <div class="text-center d-block align-items-center justify-content-xl-center p-2 pt-3">
        <img class="me-2" src="/assets/img/logo.png" style="width: 59px;">
        <h5 class="fw-bold text-primary mt-2">ระบบแจ้งซ่อม IT</h5>
    </div>
    <ul class="sidebar-nav overflow-auto px-1" style="margin-top:120px;max-height: 99vh;padding-bottom: 231px;">
        <li class="text-light-emphasis">แจ้งงาน</li>
        <li>
            <a class="rounded  <?= $controller == 'createJob' ? "active" : "" ?>" href="/dashboard/createJob">
                <i class="bx bx-plus-circle "></i>
                <span class="ms-2 pb-2">แจ้งงาน</span>&nbsp;

            </a>
        </li>
        <li class="text-light-emphasis mt-3">รายการ</li>
        <li>
            <a class="rounded  <?= $controller == 'listJob' ? "active" : "" ?>" href="/dashboard/listJob">
                <i class="bx bx-list-ul"></i>
                <span class="ms-2">รายการแจ้งซ่อม</span>&nbsp;
            </a>
        </li>
        <li>
            <a class="rounded" href="resiveJob.html">
                <i class="bx bx-clipboard"></i>
                <span class="ms-2">รายการที่ได้รับ</span>&nbsp;
            </a>
        </li>
        <li>
            <a class="rounded" href="historyJob.html">
                <i class="bx bx-history"></i>
                <span class="ms-2">ประวัติการทำรายการ</span>&nbsp;
            </a>
        </li>
        <li>
            <a class="rounded" href="reportJob.html">
                <i class="bx bx-pie-chart-alt"></i>
                <span class="ms-2">รายงาน</span>&nbsp;
            </a>
        </li>
        <li class="text-light-emphasis mt-3">ตั้งค่าระบบ</li>
        <li>
            <a class="rounded" href="memberType.html">
                <i class="bx bx-user-pin"></i>
                <span class="ms-2">ประเภทผู้รับงาน</span>&nbsp;
            </a>
        </li>
        <li>
            <a class="rounded" href="member.html">
                <i class="bx bx-group"></i>
                <span class="ms-2">ผู้รับงาน</span>&nbsp;
            </a>
        </li>
        <li>
            <a class="rounded" href="jobType.html">
                <i class="bx bx-briefcase"></i>
                <span class="ms-2">ประเภทงาน</span>&nbsp;
            </a>
        </li>
        <li>
            <a class="rounded" href="userPermission.html">
                <i class="bx bx-shield"></i>
                <span class="ms-2">สิทธิ์ผู้ใช้งานทั่วไป</span>&nbsp;
            </a>
        </li>
        <li>
            <a class="rounded" href="memberPermission.html">
                <i class="bx bx-lock-alt"></i>
                <span class="ms-2">สิทธิ์ผู้รับงาน</span>&nbsp;
            </a>
        </li>
    </ul>
</div>