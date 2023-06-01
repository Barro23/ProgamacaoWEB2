from django.shortcuts import render
from django.http import HttpResponse
from django.contrib.auth.models import User
# Create your views here.

def home(request):
    return render(request, 'home.html')
def create(request):
    return render(request, 'create.html')
def store(request):
    data={}
    if(request.POST['password'] != request.POST['password-conf']):
        data['msg']="Senha e confirmação diferentes"
        data['class']="alert-danger"

    else:
        user = User.objects.create_user(request.POST['name'], request.POST['email'], request.POST['password'])
        user.first_name=request.POST['user']
        user.save()
        data['msg']="cadastrado com sucesso!"
        data['class']="alert-success"

    return render(request,'create.html', data)