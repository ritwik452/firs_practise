<?php 
include('database/connection.php'); 
?>

<div class="container">
  <div class="card">
    <div class="card-header">
      <div class="title">User Management</div>
      <div class="actions">
        <input id="userSearch" class="search" placeholder="Search user..." />
        <a href="index.php" class="btn primary">Back</a>
        </div>
    </div>

    <div class="table-wrap">
      <table>
        <thead>
          <tr>
            <th>User</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Joined</th>
          </tr>
        </thead>
        <tbody id="userTable">
          <?php
             $query="SELECT * FROM users WHERE role='user' ORDER BY created_at ASC";
             $result=mysqli_query($conn,$query);
             if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
          ?>
          <tr>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo ucfirst($row['role']); ?></td>
            <td>
              <?php 
                $status = $row['status'];
                $badgeClass = ($status=='active')?'active':(($status=='blocked')?'blocked':'pending');
              ?>
              <span class="badge <?php echo $badgeClass; ?>"><?php echo ucfirst($status); ?></span>
            </td>
            <td><?php echo date('d M Y', strtotime($row['created_at'])); ?></td>
          </tr>
          <?php
                }
             } else {
               echo "<tr><td colspan='5' style='text-align:center'>No users found.</td></tr>";
             }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>


<script>
  const searchInput = document.getElementById('userSearch');
  const tableRows = document.querySelectorAll('#userTable tr');

  searchInput.addEventListener('keyup', function(){
    const filter = this.value.toLowerCase();
    tableRows.forEach(row => {
      const text = row.textContent.toLowerCase();
      row.style.display = text.includes(filter) ? '' : 'none';
    });
  });
</script>

<style>
:root{
  --bg:#0f172a;
  --card:#111827;
  --muted:#94a3b8;
  --text:#e5e7eb;
  --primary:#22c55e;
  --danger:#ef4444;
  --warning:#f59e0b;
  --border:#1f2937;
}
*{box-sizing:border-box}
body{margin:0;font-family:system-ui,-apple-system,Segoe UI,Roboto,Ubuntu;background:linear-gradient(135deg,#020617,#020617 40%,#020617);color:var(--text);}
.container{padding:24px}
.card{background:rgba(17,24,39,.85);backdrop-filter: blur(6px);border:1px solid var(--border);border-radius:16px;box-shadow:0 20px 40px rgba(0,0,0,.35);overflow:hidden;}
.card-header{display:flex;gap:12px;align-items:center;justify-content:space-between;padding:16px 20px;border-bottom:1px solid var(--border);}
.title{font-size:20px;font-weight:700}
.actions{display:flex;gap:10px}
.search{background:#020617;border:1px solid var(--border);color:var(--text);border-radius:10px;padding:10px 12px;min-width:220px}
.btn{border:1px solid var(--border);background:#020617;color:var(--text);border-radius:10px;padding:10px 14px;cursor:pointer}
.btn.primary{background:linear-gradient(135deg,#22c55e,#16a34a);border:none}
.table-wrap{overflow:auto}
table{width:100%;border-collapse:separate;border-spacing:0}
thead th{position:sticky;top:0;z-index:1;background:#020617;color:var(--muted);text-align:left;font-weight:600;font-size:13px;padding:14px 16px;border-bottom:1px solid var(--border)}
tbody td{padding:14px 16px;border-bottom:1px solid var(--border)}
tbody tr:hover{background:#020617}
.avatar{display:flex;align-items:center;gap:10px}
.avatar img{width:36px;height:36px;border-radius:50%;object-fit:cover;border:2px solid #020617}
.badge{padding:6px 10px;border-radius:999px;font-size:12px;font-weight:600}
.badge.active{background:rgba(34,197,94,.15);color:#22c55e}
.badge.blocked{background:rgba(239,68,68,.15);color:#ef4444}
.badge.pending{background:rgba(245,158,11,.15);color:#f59e0b}
@media (max-width:768px){.actions{flex-wrap:wrap}.search{min-width:100%}}
</style>
