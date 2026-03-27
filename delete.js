function deletePost(id) {
  if (!confirm("Are you sure you want to delete this post?")) return;

  fetch("deleteA.php?id=" + id)
    .then((res) => res.text())
    .then((msg) => {
      alert(msg);
      document.getElementById("post-" + id).remove();
    });
}

function editPost(id) {
  const postDiv = document.getElementById("post-" + id);
  const commentSpan = postDiv.querySelector(".comment");
  const currentComment = commentSpan.textContent;

  const newComment = prompt("Edit the comment:", currentComment);
  if (newComment === null) return;

  const formData = new URLSearchParams();
  formData.append("id", id);
  formData.append("comment", newComment);

  fetch("editA.php", {
    method: "POST",
    body: formData,
  })
    .then((res) => res.text())
    .then((msg) => {
      alert(msg);
      commentSpan.textContent = newComment;
    });
}
