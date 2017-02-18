<form method="post" action="/remindertype/new">
  <h2>New ReminderType</h2>
   <div class="form-group">
       <label>Reminder Type : </label>
       <input type="text" class = "form-control" name="name" placeholder="Reminder Type Name"
   </div>



   <div class="form-group">
       {{csrf_field()}}
       <input class="btn btn-primary" type="submit" value="Create New Reminder Type">
   </div>
</form>
