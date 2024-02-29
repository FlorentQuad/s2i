[Run On Openshift: ](https://console.redhat.com/openshift/sandbox)
```
oc new-app --name=s2i php~https://github.com/FlorentQuad/s2i -l test=s2i 
```
```
oc create route edge --service=s2i --insecure-policy=None
```
```
echo "Visit: https://$(oc get route s2i -o=go-template="{{.spec.host}}")"
```
