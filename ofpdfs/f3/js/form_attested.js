
var IconTick = 'data: image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAATCAYAAAB7u5a2AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADpSURBVDhP3ZQtEoUgFIXZhct4kcgSiC8aXYJLIBpdgpFoJBqJRiORSDxP9M2IM/Izzli8M1A8891zjwDBg0UeZOOtcKOhlLpes80mGo / FSNRcQEbhBnYSoLSFivSJws3A0U5xcxuYEBBSgfXzpTAJFxvcYdHLuh91Aq + i8FvYJQN30B1D5d39IaVg3yTr3IXjf / kRxdrMupjn3X8W7kWHW58xAd2m0Og + AonfUgYPG + xgXxMEuQm3Y4NamtMpcDaIwY1o + ICz4nxoEtd / gawpKGNgF4tSjl7fzDx7 / QoEb324CkZPSR6N5QdImVqfbkGFCgAAAABJRU5ErkJggg ==';
var IconBlank = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAASCAYAAAC0EpUuAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACbSURBVDhP7ZQhDsMwDEVzo8HAwMEcIbBH2BEMB3eEwsDCwEIfYTBwsPBtB4gzVVOjglkys56+/W07Dgh3AJPB0KqUUtqptdtgW2nNpChkA5rlShBlM9BNaJ0jt7UnZkUud3QvVL5BnWCVmEr/0I5TH6P2zvS1TKTc2cVtYYozVoVxUU9y8vgQCI30PvJQa0sZfaY/fJrBD+VsSt/rn6Q5x3b2AQAAAABJRU5ErkJggg==';
var img = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAATgAAAB6CAYAAAArmE+5AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAB9rSURBVHhe7Z2HnxRF2sfv/3nv3nvPyycGzCinKOqdGDGcemYECYJKUFQEQUVFBRQUBRVQEFjSEpe47JJzZoGFJaclWW9/m62ht6eqp2d2Znem+nk+n/0o090Vnqr+9ZPrN0pIOCAcEA44yoHfODovmZZwQDggHFACcLIJhAPCAWc5IADn7NLKxIQDwgEBONkDwgHhgLMcEIBzdmllYsIB4YAAnOwB4YBwwFkOCMA5u7QyMeGAcEAATvaAcEA44CwHBOCcXVqZmHBAOCAAJ3tAOCAccJYDAnDOLq1MTDggHBCAkz0gHBAOOMsBAThnl1YmJhwQDgjAyR4QDggHnOWAAJyzSysTEw4IBwTgZA8IB4QDznJAAM7ZpZWJCQeEAwJwsgeEA8IBZzkgAGdZ2vLaterWuf3VX6e/qh5fOkwN2ThVzT2wTh0+e9LZzSATEw64xgEBuNCKbj95QD257HP1P1Netv61mdNfda3+Rn2zY4Fac3SXOv/rBdf2hcxHOOAEBwTgGpbx5Pl6NXDDZPX7qa9EgpsJ+P5v2ivq3oWDVZ81P6rxu5eoTcf3qou/XnRig8gkhAOlzIHEA9yv6lf1857l6ppZb2QNbFFS3h/Luqn7F32o3l43UU2qqVRIhvQlJBwQDjQfBxINcGuP7VEdKj7IK7BFgR72vI5LPlGDPElx2r5qtef0oeZbaelJOJBADiQS4HAUvLH6e/XbKZ2bDdxswNdq5mu+ze/jzdPVgoMb1PFzpxO4DWXKwoHCcCBRAHfBs4vhGPjbjJ4tDmw2wAN02859R/Vc9Z0au6tCbRR7XmF2vrSaCA4kBuCWHdqi2s1/r2iBzQZ4jy351LffCQkHhAPZc8B5gNt35oh6uWp0yQHbTeVvqhn7V2W/ovKEcEA4kOKAswB35sI5NXRTmbrC82ZGGf6L7dqfy3qoYVtmqHpv/ELCAeFA0zjgHMARijG5ZoVqPbtPSQHb76Z2Ub1X/6Dq6o83bUXlaeGAcMBNCW7V0Z3NGvaRL+nv6WVfqC0n9su2FA4IB/LMASckuNr6Y6rbyjElJbEBjnd6To9FdZvyvKTSnHBAOKA5UNIAh50Ke9WfyrqXFLhdNfN1L6VrqZfOJZkN8ioKBwrJgZIFuGl7q9WN5f1KCtiws/X3UrdOnD9TyDWVtoUDwoEGDpQcwJFe9dCij0oK2FBHH1481EvC3ycbTzggHGhGDpQMwOFd7LlqbIulVyF93Tb3bYVDgKohqMZjd1b4OaUz969WS71AYv6wqRG/NmHPUjV862xfYhu9fZ4k2jfjppauhAMlZ4Mb46VYPeolqv9hWteCS2+UTCIJ/931P6uJe5aptUd3q20na/1c0a93zFdvrZ2gOlWNUmQZtF8w0Ac+1GX+bp7zlrpr/kD/+ecrR6q+HhhO37dSdpxwQDjQAhwoGQlO8+bsxfOq+sgONXJbuersZSiQt/m7qU1PmgeU3t/wiy+FAWZT9lb50hdARb23poSE0LaQcEA40PwcKDmAM7Ho9IWzPuh9uW2OD0RxvKoktT/o2fKQyHafqvPLkfdbO74gjgvUWzIrhIQDwoHm5YATABdk2V+m91Blnkp45NwpVXFwo28r++/y4erqhoKW18/uqz7aNM1PYEd1fK5yhLqiGdTe+QfWN+/KSm/CAeGAcg7g7qsY4ktlJqIO3C5PWuu95odmL5mEuiskHBAONC8HnAO4Hiu/VQPWT7JycapnW2uKPS3XZzmhS0g4IBxoXg44B3AjPOcD3ksbURcuV5Bq6nNS1615N7f0JhxwDuBwFpDjaSM8pE0BKpwTN5T39b2rxMRxfCDlz5Ec+cPed8+CQYpS5OF+RnnxcELCAeFA83HAOYDjIBdqwNnyPLkeF+DwfgJWxL2h2nIcYDZ12g56wckEAQOArbz8UwBRSDggHGg+DjgHcNSD48g+Qj9MxKEuUQAHOL5Q+aVfUy6fOaPnLl5Qs/avab6VlZ6EA8IB97yorOndntQ1u9YMJkhgJoDjmR92LVbE1Jmoru6QWr16taqoWKTmzp2X+lu1apWqqfEOer7o5kHPfDBQrW+f9666xcvSwANdiid/kZFCwDVhQpSwP+CV2Cpm4uNKFgzZMWTKENgu5+pmv2LOSXCwgNpwOBtsFAS4exa+r0wxaseOHVMTJkxUL7/cRd18cxv1979fGfl33XU3qGeeeVaNGjVa7d9fm/1KFOkT8DH8QeBs11Ii8oXDcyADBqm6WOmJpcPSxvyJd7SkUHYccBLgPt86yzf424gDmPn7bufCNFsdwPbBBx+qa65pbQS01q2vV//85x3q+utvtALelVdepfr27afq6sxqcnZL1LJ3c/iNSeK1mQBadrTm3qnkYpoDucXFSDY7cetZvYtxuEU9JicBDvX03oWDrYznoGXTC7p48WJ1223/TAOup556Wk2fPiMNsE6cOKEWLVqs3nijj7rqqmvSnrvxxptVebldkmyJnXH+/Hk1bVqZ6tjxMTV8+IiMQ/jHjF5GcFhzdFfGZ4vlBswPJoD7Ze+KZhsiH86vvhql2rW7S1VWRveLM8s0Xj7KQtlxwEmA23nqoJ+PavOkmn4fP36CQvIKqqKonQBbHNq1a7d68MGHjFLdjz+Oj9NEQe9Zt26dGjLkA9W27WUAHzr044x9vrjiq7SXjYrE9V7Rg1Kht70skjBgUEBh/5mjBZ0CH5OFCxeq1157XSH5673FhzSKUJ2vaUgtDI772eWZP0gFnVAJNu4kwF30TrCnrFJcNWrOnLlpwHT11dcqHAjZEBLdv/51nxHkWlKSO3jwoHFM48aNyzg9zrsgrlC/aH+b0VNVlNg5EifP1/sFR/Uc8JTjJS80TZky1cj3bdu2ZeyaqjZ/93itx4yThzN+hbLjgJMABwvwmNk8qUEW7d+/32hP+/rrb7LjZMPdSEr/+EertI19ww03tZhNDuA1OUlmzpwVa45IvJWHt/n18PIZOhOr8zzdhAeSijNzatcqcpKbg/C2m/iOuhqH4PVCr2BE1eHtcn5HHIYZ7nES4FCfKDz5jJdVsPd09Feva9duaZvwjjvuVOfO5V7eqHfvPsaN3b//OzkuU9MeO3PmjHE81dXVTWtYno7kwLx56QCHrVao+TjgJMBxII0W7e+YN0Bd8FRWE23evNn44g8b9lmTVmD9+g3GdlF7kaZagkySxKZNcmRhIdcCZ0KY74QcCTUfB5wEuG+98A8NcBhrbQD33nsDLZJN00uM33lne2PbU6dOi7W6NTU1as2axsHKgOPy5cvV5Mm/KOw7S5cuiw2YgGv4Zdu7d2+ssQRv2rlzp99/NkQg9KRJkxs9curUKd/DTNzgiBEj1c8/T1I7d9o9s1u3blU4gr74YrgaO3acWrJkac5Sdm1trd8fToA4xLiQxrBZfvfdWIX5gnVkfc6eNQeG064J4NgX2dKvnolgxYoqf+2zJeyvrBceXHiHwwsnx5EjR7JtqiTvdxLgiCO6siG84T9L7dJYu3Z3pr30rVpdHblp465y//5vGwGuX78305pAhUSamjx5sho4cJDnqPi3/yyxdBAbfPTor42xeXh+e/V6TeHFjSJCVsIAd/RotBeR7AzaxQlDbOBDDz3it4GN0Uao9jt27PDB68MPP0p5lrFBapo9e7a65ZZbjfzp2bOXOn36dOpe2hsw4D3jvW3a3OqFvER/MOAdQF5RUaGQzJ944smUjTQK4HmOcJp//7tDZID3tddepzp37mJkx8aNG9OeffDBhzNuIUCT/cBH7K23+nuhJZf26XPPPZ/xWX0Dawvf2M+2IHX2jevkJMD5X0/PKI4UR5qLiQ4fPmxc+Pbt787Lmn///Q/G9h95pGOqfe6JypIA4JB0unfvEfmSsYEJPDZ94ZFSRo78Mi0Ehmc6dHhA/fe/z/h/jIsQEr7y8+bN918q28sBWJqofft7jP3QF2AEWNmk5uBLyHwhAqUff/w/Gedu8lCvX79e3XXX3cokueq+bMZ+gD1sR7333n8pPlqDBr2vOnXq3KhdEz+QkLp16542dmxwxCBqvt9//4Pq1lvb+hLap58O8//fBkivvNIt1t5EuoTfmbJvnn02PmDG6rgIb3IW4Mg11Gqqyb2+bNly4wYgqDcfRACwaYO1aXNbqnlULmLnbJsayeC+++7PuFF1P7xoqF+atmzZYo3Ns21+cm0BuLvvvtcqZd1+ezsji5gL10xtA+SAqL5myxTR11EHdcweoBAFVAAZEleQADhAKeoDcuGCOVULlTk4ByS/cPt8IAEI7qOfIM2YMTNWep/uAyn89Okz6rPPPleosNdddzlmLjiOTBIXEumLL3ZqxGP20PvvD/a1AcYZbG/w4CH52OpF3YazAEdYAMf/AXLjdy9NWwRUG9OL+NJLnfKyYFGOBlMHbETTeFAHUWv5wqN24BhB9TNlTvB8v35vpZrnxQRweGlMoStIaWx6JDk8xwQ2h20z4Zfd9EKH5wNwm+bCi4w0efz4cf8R1F/ULhvYArILFiz0bWUADMUO+M10P2qxjVA1w88AmCYCaIJpeGS22AopaCcVElmQ+EjC87ZtbzdKcFxD9cUUAYg/9tgTjZ6nv+effyHtWW2yMI0buxrrp+dJPCYhUEGCh9gv9T2YRFwnZwGOhSNUBIB7pfrrtHUcN+5744sSVw3ItDFwEpheRNuLxdc0fD8SGcZ024YOZ17wPDah+vr6tEdMNrg4Hl1TEHQmO1JlZaVx7j/99HPauE6ePKlMY+M3Uy4vhn0TX5GabIQ9y8RbG1+D95JaFZbe9HOo3NyLumkiU7+ZeKfbQRUOjxn13kQ4EsI8RIOwERIvbS9ZsiTTNi75604D3MOLP/YBjojw8782VkeCX7LgRsrGkBu1+qgLphfRZr/C9hW+H9UiigYNGmzsA0knTCYQQVrJRKZg1Uwvqcl7iEpqk4ReeOHFtHn06NHTOjRToQPsmdkAnC1cA49jeB1w8NjG/tFHQ9VPP/1k7Bo1OdwWTo44xNrH3Q9hJwxpYVHlu1544SW/bUwYrpPTAEfhSm2HC6cXmTYyi45ROx+0ebOXamMosYTqYCJUt7gbWj+/bdt2izSTnj+LFzPcfpx5EooSfu7RRx+PfHTlylVpzwRtj+GHUb3Cfbz77gBrH/Qfvh+12EaEqYTvt4VrlJVNN/IUdR4P96xZs9NUP1u/JqC3SXvhNkwAx0cwTNgRwx8vbKFRNGbMtwpNJW5GRZx9Uqz3OA1wPVeNTQEcxQODRNiACYAIX8gHVVVVZaUCE1+VLcAxTpNk9ssvU9KmYJprnHnm8pKaVDMM5zYySaJR0munTp5UHvp4RMXmmaRpG8CRJ2riVfg3JEBAAvuezVmRC+80jz7//Iu0cZgAzmTrjQuicda/1O9xGuA4izQY8EsSvqY9e/ZYN3Km+LA4i26TEE2blPZyBTjUxfDLR1BqmFoa4OjfRqh52YA7wJINwFGANK4ExxgBiDggp+958smnjAHXTQE4k8nCtHdMEufTT5ttgnH2rWv3JAbgADpO3NKEjeKmm24xbuR8VP6gFJHpJamuNmdJ5ApwJnXNVK3CNBZi7DKRKVg1k4RgkuCiAC5b+6Mp1zdKgjMVG4jKKCDURgdbxwU6SiKFyWS/zMQ73UZcgCMzITxGQouELnEgUQDXacWoRutOXJFpAwdDLXLdKB07PprWNt4rm/E3V4ALR9pjawv3YUu2j+NFpWRUmEeZXtJCA5zJZhflRc0W4FhzsgkmTvzJK0P/nDUkJ8gXPNrhEBsTwMW18TYF4PCk29TmXPdzqT7nNMC9tnpco0KHFDk85p2qpYnYIRPA4aUjfCFXwm1vijsDxGyUK8CFY6369Omb1oWtXNKhQ4cyTjEXNavQAIe0FF43wMRGuQBcsC0+EASGAzp4QW1SHfcEKRcPdLYS3IwZM4zjMXnSMy62gzc4DXAvGarRcjqRJuKbTJIWG5gA11zp448/Sdt0BKhGlWDKBeDwgoVfNpwbYbIBXJxk+5YCOFPOrp6XyQYXBXAmPtlUVIoJ0H6UV5agYoKjM4GsKcCYfRCH4kpwplAUxhXlhY7Tvyv3OA1w9y/6MK1UdevZfRqdprRmzVpj/iSxRLt3RyewmzYBz4TTkFBfMlUHzgXgKKcefMl0Dmd4XAcOHDB+5YnEz0TNAXBkXITBIipq3+QEyJcXVc8XO18UmYKZKXYaJJOjiX0Vh+J6UVFFTXGBZLoQqpR0chrgbAemUE4pSJS/MakdfKXj2Kl0W6QgPfBA+rkMHD+YiUwAR9qYLYoeO1tQ+sS2Y3MamCQY5hunoq9JzcoUB7dhQ3oVjSgng6laSPfu9gNWSI3Kxou6fXt6vCCqvYk0wGUK+A7H1mH7DJdfsnnSdapa1J4wxcEBeiayVVuhcAQZNUkmZwGOBHvbCfacqhWmTz751AhyVHuII+ngbQwb/JHcoiLsg2MwARwvMSd2hTMOALfgpu7VyzsExpCepdvneROAk4eKFEjKDiBPvmuYMN6Hn+3QIdpLR3um/mwqusmmRsUOG5lq7UUd7IOUHh6PLWVOAzp5nVElqMheCLZpKpI6f/4CIx/IO+Yaf+w7ky0UFT08ZgKNTYSpIXioTfA54vVISwyGPrF/2NNRjhlXQNFZgFvmHdrxl+k9fJD73dTOKijNkcJlIr64JnEfoOrS5RW/SCJiP5UkkOyIpSsvn6NefbVnmlOBHMaw0Tlq09gAjs2KtMELxPiIQtd12RjXl19+ZZXygv3FCXsInyDGSwHAmsCBcucmUMX7aPtYYJMK1npjfIRkIGmE+6DCCvYlU1FKU2URqmjg3AkTziLbeFi7sISOtK3HQhA1VU2C9wAO8CmYGYKn1VT4kvg7k7MpOFf2WxhI4YmpDh0fW4pvmjykgJUpN1n3xTVdXEHvcco5uU7OAhxFL9vNH6Cu9Q7LvbG8n/pzWQ/FyUStZr6m3lo7wbqu2Kveeedd68HPNg+a/p1MCBwUeN6yoSiAM/VJP9kkS9u8bbrtoARC8CihBpnmyvVgbqUpHczUBjGCvMRx78dpo8mmbut+sH8CSMQbBqtrRM2Fih6aqDAcvheQAhz4SARLGQEaJMVHVfXlHA5b3zzPsYKakMptVWLCbQR5op8nwDuqPFS4jUzns2azf4v1XmcBjpOgRm2fpzpUfKCerxypnlg6TI3ZsUD9sGuxOlh/qVxPFPGSkPJETBwb27bxKAqJykblVSpv5HpYjQngkAwovRP8MvP/2KeCdd8yzUVfR/1irOGNThXdoK2PenDY2XRRRuqe4VnkD9VR/87YeFbTww93TF3DhqWf0f+lBBBR9qjDSFvBwo/YG4P36z4A0OAJZ0iVpnGRsM/vjBtbJNIfNkp9L7zU7b/8cpfU72QhBGsAAlZIaKwnUpRJKqKwJ+llUSWaNE+Q+MgzJhc3zPdvv/2u0dJRD4756jEjleox6/lxjfJKtlPfsO9RHAAp3zR2vLiouklxQDgLcOwcKohwuO/hs00/6IWNSvke1FLivMgWyGdd+6hoftQ6+uMvytYWF+jq6g6l5tCUeL+4/ZXyfXyw8Iyz5pwLEcdBYJqvLp1OO4SihFX1QvCIvQII6/2ajcOsEONpiTadBriWYGiufWabrpRrP/KccCBJHBCAK5LVNsU9SbBmkSyODKNkOSAAVyRLZ4p7igp2LZJhl/QwsNPWxbDHlvQkQ4PHXPP0si/UU16oFPN3nQTgimSF8dyGjdACcIVdnK7VY9QVZd1U/cV456PGGQ2gUXV4u9p4PPszZ+O0n+keSoLhRDtx3uzFH7q5LBUfuuzQ1kzNlfx1AbgiWUJThQxTCZ4iGW7JD2PCnqWpF50T2PJBZy6cUw80pAeagsnz0Yetjd2n6hQFXv/mlee/FPvZRU3f17g016kL9eqOeQNS835nnbnUeiHH2dxtC8A1N8ct/ZkSyDOlCxXJ0EtuGADRNbPe8F/0//WA4NxF8/GB2U5swPpJKfAoC4FLNm0hhQ3fOlv9vOdSdZIL3r/XHtujJtUsV4BUmDg1DkmU+dxQ3jc1hnfXXz7khzZRS4PZPbd4hzK5TgJwRbDCBAWbMg0oyJnPUJQimGpRDOHzrbNSLzpxkk2lnacO+uBDOS4NIADNsC3pZ2OY+vpy2xw/AB21kuMuOQWOdu6c/54fv6nBi996r258uA7P6j4/3DRNVR/Zkfr3zP2XDx/qveYHv51PvTEFQQ6wd5kE4FpwdQnuJQ0rUzoPZ3NGVaBtwSmUXNf13gvdaubrqZf86x3zc55DrRdjaapYowFk9dFdfttIT7P2r/HB5Rsv2DxIo71g9ODBSJTzsuVQ8zsqpqZFdZv8NER+H7Rhsg+Qt8192//3M8uH+2AJjWhoc9q+anXWszeS1aP7yKf9MWdGFvBBAbgCMjdT0wAc+YWcq8AfUf46il1HrOtrceuIZeoz6dfH7qxIvdxXe2qqSeWz8YgCDhjpNT28eKgVjLRkiPoL2GhAeXTJ5bSzyTUrUr+TN7339BH11+mvRgLcJ5un+92jtrad+45/L6C2y7PBkYrIv7H/ackMVZnfPtty+dzYdp5kyG9B6XXBwQ1Obg0BOCeXVSZl4gAezlvn9k8ByLhdi4yMOnruVJoXEjWUWoIAAx7SeQfWW4EI4Nl+8oDf9ptrx6fu+6OnIm49cem0+cV1m9Xvp15WaVEnNxyvadQm9z9XOcJ3GOgDzLVUNj/Q/z0LBvnA+IdpXRXqtw7/WOF5c6/wfuu+8tvUPAFG1GHao0/ae8+zHV4543LKnUu7RwDOpdWUuURyIAgKSDu87EHiUCIKM/DyU6hBE15WDPJaClt7dLevEvbyvJZBw/13Xp3BTcf3pVRDACaobk7cs8xvknuCktrgjZeOeUTF1FLYF56TAenyI8+uRhuAJuo1BCgRy6bbBgB7eCCGJ1VTzenDKSBDrZ1Tu9a/NGTjVP85yvmjOuN5Rc2dXbvGyd0jAOfkssqkTBx4dvmIFCjoF17fhz0rKFEBVhAgc7cnIWkw6bZyTKppJCXUPK4BdGF6fMmnqefe3/CLf5nc6OsaJEENpORMQ9jDACMdYgJIacdFeQNAcV/QW0sbqLpBInhZq6GXQbCzetxzWPDvTlWjFOXEULEBt0k1lc5uGAE4Z5dWJhbkACqmNsgH7WDcw0FE2OM0GGgDfTi0AlUwaJQfGfBgEsYRJOxpuj1UQOi41w+SYVCqw/mgqY93ODljPHz20oFHPBd0BiBxovKidgZBl/JfgOTpC2fV2F0VKcmtS9Ulb2z4T6u8gOeUvVVObxQBOKeXVyanOYDkxYv+2ymd1boQGAWBpM2c/qmT11DfNDhg39J2NdpEAtJAcV/FkEaMRoXs12B7Q7VE0kPNBSCDYEMRVkAU4AKkuEbYhyba1fcjKd7coCYTkjJ+95JGbQF6xPRxP5Io1yHa0+MM9o1jQnt5Xd4lAnAur67MzecA6qh+uYMGd65h19L2MNRDVEiImLIgIGg7Gdc2eU6GoA1Neza5pu1a+lni2FAvKbzKbwCLlhb/VNZdEaZy1/yB/rVXVzauD3fvwsFp0pdWnZEkdUhIcJyAYDgFC9vcZ1tm+fF12N5QScP2R1e3igCcqysr8/I5sPDgxlTpeqQcQj2ChDQEQAA2GtyCwbNcQwLS6Vx4OvFCBoNvSfuCTp6vTxn/H/HK4odVQ/pAlUWKDF/DPhbOqAA49X2ok9pJocePGsxh5jhAKMMPWGpHhCz/JQ4IwMlOcJYDeCK13Q2gAAiCxU8BBO1YwO6GHav/uok+qPCcltIID0Ey+9FT+4hXu352X/V64FBxzt8lrUp7WgmsJS4t2Lf2VAJiwd/pC3AzZRTQJ3F7OCi2nax1dp0KOTEBuEJyV9puMQ6gRpoM7DgYMMZ3rf7Gv65zUgEx7G/6GXJBkbgueyEv2bcAOKQ4wjJM7ROHpok4O6RG1NNg2tQbq79P2coGeuEm+cqFbTFmF3HHAnBFvDgytNw5gMRjAiB+a91gD8MRQPxX+L7OVaP9mLTw70h05HpC2ikQVCE57yNMSGE6OFdf498E/OJVFSosBwTgCstfab0FOaDVTRPQofpBGNvbL7hk5OcPVZV8Teim8jdTvyOFBb2OGO5xSiDRcagREqNQ8XFAAK741kRGlCcOkG0AaJFcT8qTDnTlN2LfNCGtkQRPTBgSl6b1x2p8ryNVQWwFJPM0VGmmQBwQgCsQY6XZlueANvpjT4PwkmpJjXNzhdzngACc+2ucyBkSlKvBTId/kAOqPaSulwlK5KIbJi0AJzvBSQ5wyDdgdpWnnmoiLITf8lHk0kmmOTgpATgHF1WmdLlMEelQEDFuulQShR+FksEBAbhkrHPiZhn0oFYe3paqwEEcXDhsI3HMSdCEBeAStNhJmmow3UrnfhL2ka8TtJLEy1KeqwBcKa+ejN3KAcojBePfdFlvYVmyOCAAl6z1TtRsOUmKdCtqqEnWQKKWPjVZAbhkrrvMWjiQCA4IwCVimWWSwoFkckAALpnrLrMWDiSCAwJwiVhmmaRwIJkcEIBL5rrLrIUDieCAAFwillkmKRxIJgcE4JK57jJr4UAiOCAAl4hllkkKB5LJAQG4ZK67zFo4kAgOCMAlYpllksKBZHJAAC6Z6y6zFg4kggMCcIlYZpmkcCCZHBCAS+a6y6yFA4nggABcIpZZJikcSCYHBOCSue4ya+FAIjggAJeIZZZJCgeSyQEBuGSuu8xaOJAIDvw/pr82A1L1sqEAAAAASUVORK5CYII=';
var circle = 'X';
var box1, box2, box3, box4, box5, box6, box7, box8, box9, box10, box11, box12, box13, box14, box15, box16, box17, box18, box19, box20, box21, box22, box23, box24, box25, box26, box27, box28, box29, box30, box31, box32, box33, box34, box35, box36, box37, box38, box39, box40, box41, box42, box43, box44, box45, box46, box47, box48, box49, box50, box51, box52, box53, box54, box55, box56, box57, box58, box59, box60, box61, box62, box63, box64, box65, box66, box67, box68, box69, box70, box71, box72, box73, box74, box75, box76, box77, box78, box79, box80, box81, box82, box83, box84, box85, box86, box87, box88, box89, box90, box91, box92, box93, box94, box95, box96, box97, box98, box99, box100, box101, box102, box103, box104, box105, box106, box107, box108, box109, box110, box111, box112, box113, box114, box115, box116, box117, box118, box119, box120, box121, box122, box123, box124, box125, box126, box127, box128, box129, box130, box131, box132, box133, box134, box135, box136, box137, box138, box139, box140, box141, box142, box143, box144, box145, box146, box147, box148, box149, box150, box151, box152, box153, box154, box155, box156, box157, box158, box159, box160, box161, box162;
// box1 = box2 = box3 = box4 = box5 = box6 = box7 = box8 = box9 = box10 = box11 = box12 = box13 = box14 = box15 = box16 = box17 = box18 = box19 = box20 = box21 = box22 = box23 = box24 = box25 = box26 = box27 = box28 = box29 = box30 = box31 = box32 = box33 = box34 = box35 = box36 = box37 = box38 = box39 = box40 = box41 = box42 = box43 = box44 = box45 = box46 = box47 = box48 = box49 = box50 = box51 = box52 = box53 = box54 = box55 = box56 = box57 = box58 = box59 = box60 = box61 = box62 = box63 = box64 = box65 = box66 = box67 = box68 = box69 = box70 = box71 = box72 = box73 = box74 = box75 = box76 = box77 = box78 = box79 = box80 = box81 = box82 = box83 = box84 = box85 = box86 = box87 = box88 = box89 = box90 = box91 = box92 = box93 = box94 = box95 = box96 = box97 = box98 = box99 = box100 = box101 = box102 = box103 = box104 = box105 = box106 = box107 = box108 = box109 = box110 = box111 = box112 = box113 = box114 = box115 = box116 = box117 = box118 = box119 = bpx120 = box121 = box122 = box123 = box124 = box125 = box126 = box127 = box128 = box129 = box130 = box131 = box132 = box133 = box134 = box135 = box136 = box137 = box138 = box139 = box140 = bpx141 = box142 = box143 = box144 = box145 = box146 = box147 = box148 = box149 = box150 = box151 = IconBlank;
box1 = box2 = box3 = box4 = box5 = box6 = box7 = box8 = box9 = box10 = box11 = box12 = box13 = box14 = box15 = box16 = box17 = box18 = box19 = box20 = box21 = box22 = box23 = box24 = box25 = box26 = box27 = box28 = box29 = box30 = box31 = box32 = box33 = box34 = box35 = box36 = box37 = box38 = box39 = box40 = box41 = box42 = box43 = box44 = box45 = box46 = box47 = box48 = box49 = box50 = box51 = box52 = box53 = box54 = box55 = box56 = box57 = box58 = box59 = box60 = box61 = box62 = box63 = box64 = box65 = box66 = box67 = box68 = box69 = box70 = box71 = box72 = box73 = box74 = box75 = box76 = box77 = box78 = box79 = box80 = box81 = box82 = box83 = box84 = box85 = box86 = box87 = box88 = box89 = box90 = box91 = box92 = box93 = box94 = box95 = box96 = box97 = box98 = box99 = box100 = box101 = box102 = box103 = box104 = box105 = box106 = box107 = box108 = box109 = box110 = box111 = box112 = box113 = box114 = box115 = box116 = box117 = box118 = box119 = box120 = box121 = box122 = box123 = box124 = box125 = box126 = box127 = box128 = box129 = box130 = box131 = box132 = box133 = box134 = box135 = box136 = box137 = box138 = box139 = box140 = box141 = box142 = box143 = box144 = box145 = box146 = box147 = box148 = box149 = box150 = box151 = box152 = box153 = box154 = box155 = box156 = box157 = box158 = box159 = box160 = box161 = box162 = IconBlank;
let form_attestation = (formNumber = "", user_id = "", btn_id = "", date = "") => {
    var date = date.split(" ");
    var d = new Date(date[0]);
    date = d.getDate() + "-" + (d.getMonth() + 1) + "-" + d.getFullYear() + " " + date[1];
    one = document.getElementById('one').value.toUpperCase();
    two = document.getElementById('two').value.toUpperCase();
    three = document.getElementById('three').value.toUpperCase();
    four = document.getElementById('four').value.toUpperCase();
    five = document.getElementById('five').value.toUpperCase();
    six = document.getElementById('six').value.toUpperCase();
    seven = document.getElementById('seven').value.toUpperCase();
    eight = document.getElementById('eight').value.toUpperCase();
    nine = document.getElementById('nine').value.toUpperCase();
    ten = document.getElementById('ten').value.toUpperCase();
    eleven = document.getElementById('eleven').value.toUpperCase();
    twelve = document.getElementById('twelve').value.toUpperCase();
    thirteen = document.getElementById('thirteen').value.toUpperCase();
    forteen = document.getElementById('forteen').value.toUpperCase();
    fifteen = document.getElementById('fifteen').value.toUpperCase();
    sixteen = document.getElementById('sixteen').value.toUpperCase();
    seventeen = document.getElementById('seventeen').value.toUpperCase();
    eighteen = document.getElementById('eighteen').value.toUpperCase();
    ninteen = document.getElementById('ninteen').value.toUpperCase();
    twenty = document.getElementById('twenty').value.toUpperCase();
    twentyOne = document.getElementById('twentyOne').value.toUpperCase();
    twentyTwo = document.getElementById('twentyTwo').value.toUpperCase();
    twentyThree = document.getElementById('twentyThree').value.toUpperCase();
    twentyFour = document.getElementById('twentyFour').value.toUpperCase();
    twentyFive = document.getElementById('twentyFive').value.toUpperCase();
    twentySix = document.getElementById('twentySix').value.toUpperCase();
    twentySeven = document.getElementById('twentySeven').value.toUpperCase();
    twentyEight = document.getElementById('twentyEight').value.toUpperCase();
    twentyNine = document.getElementById('twentyNine').value.toUpperCase();
    thirty = document.getElementById('thirty').value.toUpperCase();
    thirtyOne = document.getElementById('thirtyOne').value.toUpperCase();
    thirtyTwo = document.getElementById('thirtyTwo').value.toUpperCase();
    thirtyThree = document.getElementById('thirtyThree').value.toUpperCase();
    thirtyFour = document.getElementById('thirtyFour').value.toUpperCase();
    thirtyFive = document.getElementById('thirtyFive').value.toUpperCase();
    thirtySix = document.getElementById('thirtySix').value.toUpperCase();
    thirtySeven = document.getElementById('thirtySeven').value.toUpperCase();
    thirtyEight = document.getElementById('thirtyEight').value.toUpperCase();
    thirtyNine = document.getElementById('thirtyNine').value.toUpperCase();
    forty = document.getElementById('forty').value.toUpperCase();
    fortyOne = document.getElementById('fortyOne').value.toUpperCase();
    fortyTwo = document.getElementById('fortyTwo').value.toUpperCase();
    fortyThree = document.getElementById('visaEvidence').value.toUpperCase();
    fortyFour = document.getElementById('eduHistoryHighestQualifications').value.toUpperCase();
    fortyFive = document.getElementById('govtEnrolCoursesName').value.toUpperCase();
    fortySix = document.getElementById('govtFundedCoursesName').value.toUpperCase();
    fortySeven = document.getElementById('sameLevelGovtFundedCoursesName').value.toUpperCase();



























    document.getElementById('box1').checked ? box1 = IconTick : box1 = IconBlank;
    document.getElementById('box2').checked ? box2 = IconTick : box2 = IconBlank;
    document.getElementById('box3').checked ? box3 = IconTick : box3 = IconBlank;
    document.getElementById('box4').checked ? box4 = IconTick : box4 = IconBlank;
    document.getElementById('box5').checked ? box5 = IconTick : box5 = IconBlank;
    document.getElementById('box6').checked ? box6 = IconTick : box6 = IconBlank;
    document.getElementById('box7').checked ? box7 = IconTick : box7 = IconBlank;
    document.getElementById('box8').checked ? box8 = IconTick : box8 = IconBlank;
    document.getElementById('box9').checked ? box9 = IconTick : box9 = IconBlank;
    document.getElementById('box10').checked ? box10 = IconTick : box10 = IconBlank;
    document.getElementById('box11').checked ? box11 = IconTick : box11 = IconBlank;
    document.getElementById('box12').checked ? box12 = IconTick : box12 = IconBlank;
    document.getElementById('box13').checked ? box13 = IconTick : box13 = IconBlank;
    document.getElementById('box14').checked ? box14 = IconTick : box14 = IconBlank;
    document.getElementById('box15').checked ? box15 = IconTick : box15 = IconBlank;
    document.getElementById('box16').checked ? box16 = IconTick : box16 = IconBlank;
    document.getElementById('box17').checked ? box17 = IconTick : box17 = IconBlank;
    document.getElementById('box18').checked ? box18 = IconTick : box18 = IconBlank;
    document.getElementById('box19').checked ? box19 = IconTick : box19 = IconBlank;
    document.getElementById('box20').checked ? box20 = IconTick : box20 = IconBlank;
    document.getElementById('box21').checked ? box21 = IconTick : box21 = IconBlank;
    document.getElementById('box22').checked ? box22 = IconTick : box22 = IconBlank;
    document.getElementById('box23').checked ? box23 = IconTick : box23 = IconBlank;
    document.getElementById('box24').checked ? box24 = IconTick : box24 = IconBlank;
    document.getElementById('box25').checked ? box25 = IconTick : box25 = IconBlank;
    document.getElementById('box26').checked ? box26 = IconTick : box26 = IconBlank;
    document.getElementById('box27').checked ? box27 = IconTick : box27 = IconBlank;
    document.getElementById('box28').checked ? box28 = IconTick : box28 = IconBlank;
    document.getElementById('box29').checked ? box29 = IconTick : box29 = IconBlank;
    document.getElementById('box30').checked ? box30 = IconTick : box30 = IconBlank;
    document.getElementById('box31').checked ? box31 = IconTick : box31 = IconBlank;
    document.getElementById('box32').checked ? box32 = IconTick : box32 = IconBlank;
    document.getElementById('box33').checked ? box33 = IconTick : box33 = IconBlank;
    document.getElementById('box34').checked ? box34 = IconTick : box34 = IconBlank;
    document.getElementById('box35').checked ? box35 = IconTick : box35 = IconBlank;
    document.getElementById('box36').checked ? box36 = IconTick : box36 = IconBlank;
    document.getElementById('box37').checked ? box37 = IconTick : box37 = IconBlank;
    document.getElementById('box38').checked ? box38 = IconTick : box38 = IconBlank;
    document.getElementById('box39').checked ? box39 = IconTick : box39 = IconBlank;
    document.getElementById('box40').checked ? box40 = IconTick : box40 = IconBlank;
    document.getElementById('box41').checked ? box41 = IconTick : box41 = IconBlank;
    document.getElementById('box42').checked ? box42 = IconTick : box42 = IconBlank;
    document.getElementById('box43').checked ? box43 = IconTick : box43 = IconBlank;
    document.getElementById('box44').checked ? box44 = IconTick : box44 = IconBlank;
    document.getElementById('box45').checked ? box45 = IconTick : box45 = IconBlank;
    document.getElementById('box46').checked ? box46 = IconTick : box46 = IconBlank;
    document.getElementById('box47').checked ? box47 = IconTick : box47 = IconBlank;
    document.getElementById('box48').checked ? box48 = IconTick : box48 = IconBlank;
    document.getElementById('box49').checked ? box49 = IconTick : box49 = IconBlank;
    document.getElementById('box50').checked ? box50 = IconTick : box50 = IconBlank;
    document.getElementById('box51').checked ? box51 = IconTick : box51 = IconBlank;
    document.getElementById('box51').checked ? box52 = IconTick : box52 = IconBlank;
    document.getElementById('box53').checked ? box53 = IconTick : box53 = IconBlank;
    document.getElementById('box54').checked ? box54 = IconTick : box54 = IconBlank;
    document.getElementById('box55').checked ? box55 = IconTick : box55 = IconBlank;
    document.getElementById('box56').checked ? box56 = IconTick : box56 = IconBlank;
    document.getElementById('box57').checked ? box57 = IconTick : box57 = IconBlank;
    document.getElementById('box58').checked ? box58 = IconTick : box58 = IconBlank;
    document.getElementById('box59').checked ? box59 = IconTick : box59 = IconBlank;
    document.getElementById('box60').checked ? box60 = IconTick : box60 = IconBlank;
    document.getElementById('box61').checked ? box61 = IconTick : box61 = IconBlank;
    document.getElementById('box62').checked ? box62 = IconTick : box62 = IconBlank;
    document.getElementById('box63').checked ? box63 = IconTick : box63 = IconBlank;
    document.getElementById('box64').checked ? box64 = IconTick : box64 = IconBlank;
    document.getElementById('box65').checked ? box65 = IconTick : box65 = IconBlank;
    document.getElementById('box66').checked ? box66 = IconTick : box66 = IconBlank;
    document.getElementById('box67').checked ? box67 = IconTick : box67 = IconBlank;
    document.getElementById('box68').checked ? box68 = IconTick : box68 = IconBlank;
    document.getElementById('box69').checked ? box69 = IconTick : box69 = IconBlank;
    document.getElementById('box70').checked ? box70 = IconTick : box70 = IconBlank;
    document.getElementById('box71').checked ? box71 = IconTick : box71 = IconBlank;
    document.getElementById('box72').checked ? box72 = IconTick : box72 = IconBlank;
    document.getElementById('box73').checked ? box73 = IconTick : box73 = IconBlank;
    document.getElementById('box74').checked ? box74 = IconTick : box74 = IconBlank;
    document.getElementById('box75').checked ? box75 = IconTick : box75 = IconBlank;
    document.getElementById('box76').checked ? box76 = IconTick : box76 = IconBlank;
    document.getElementById('box77').checked ? box77 = IconTick : box77 = IconBlank;
    document.getElementById('box88').checked ? box78 = IconTick : box78 = IconBlank;
    document.getElementById('box79').checked ? box79 = IconTick : box79 = IconBlank;
    document.getElementById('box80').checked ? box80 = IconTick : box80 = IconBlank;
    // document.getElementById('box81').checked ? box81 = IconTick : box81 = IconBlank;
    document.getElementById('box82').checked ? box82 = IconTick : box82 = IconBlank;
    document.getElementById('box83').checked ? box83 = IconTick : box83 = IconBlank;
    document.getElementById('box84').checked ? box84 = IconTick : box84 = IconBlank;
    document.getElementById('box85').checked ? box85 = IconTick : box85 = IconBlank;
    document.getElementById('box86').checked ? box86 = IconTick : box86 = IconBlank;
    document.getElementById('box87').checked ? box87 = IconTick : box87 = IconBlank;
    document.getElementById('box88').checked ? box88 = IconTick : box88 = IconBlank;
    document.getElementById('box89').checked ? box89 = IconTick : box89 = IconBlank;
    document.getElementById('box90').checked ? box90 = IconTick : box90 = IconBlank;
    document.getElementById('box91').checked ? box91 = IconTick : box91 = IconBlank;
    document.getElementById('box92').checked ? box92 = IconTick : box92 = IconBlank;
    document.getElementById('box93').checked ? box93 = IconTick : box93 = IconBlank;
    document.getElementById('box94').checked ? box94 = IconTick : box94 = IconBlank;
    document.getElementById('box95').checked ? box95 = IconTick : box95 = IconBlank;
    document.getElementById('box96').checked ? box96 = IconTick : box96 = IconBlank;
    document.getElementById('box97').checked ? box97 = IconTick : box97 = IconBlank;
    document.getElementById('box98').checked ? box98 = IconTick : box98 = IconBlank;
    document.getElementById('box99').checked ? box99 = IconTick : box99 = IconBlank;
    document.getElementById('box100').checked ? box100 = IconTick : box100 = IconBlank;
    document.getElementById('box101').checked ? box101 = IconTick : box101 = IconBlank;
    document.getElementById('box102').checked ? box102 = IconTick : box102 = IconBlank;
    document.getElementById('box103').checked ? box103 = IconTick : box103 = IconBlank;
    document.getElementById('box104').checked ? box104 = IconTick : box104 = IconBlank;
    document.getElementById('box105').checked ? box105 = IconTick : box105 = IconBlank;
    document.getElementById('box106').checked ? box106 = IconTick : box106 = IconBlank;
    document.getElementById('box107').checked ? box107 = IconTick : box107 = IconBlank;
    document.getElementById('box108').checked ? box108 = IconTick : box108 = IconBlank;
    document.getElementById('box109').checked ? box109 = IconTick : box109 = IconBlank;
    document.getElementById('box110').checked ? box110 = IconTick : box110 = IconBlank;
    document.getElementById('box111').checked ? box111 = IconTick : box111 = IconBlank;
    document.getElementById('box112').checked ? box112 = IconTick : box112 = IconBlank;
    document.getElementById('box113').checked ? box113 = IconTick : box113 = IconBlank;
    document.getElementById('box114').checked ? box114 = IconTick : box114 = IconBlank;
    document.getElementById('box115').checked ? box115 = IconTick : box115 = IconBlank;
    document.getElementById('box116').checked ? box116 = IconTick : box116 = IconBlank;
    document.getElementById('box117').checked ? box117 = IconTick : box117 = IconBlank;
    document.getElementById('box118').checked ? box118 = IconTick : box118 = IconBlank;
    document.getElementById('box119').checked ? box119 = IconTick : box119 = IconBlank;
    document.getElementById('box120').checked ? box120 = IconTick : box120 = IconBlank;
    document.getElementById('box-Manager').checked ? box121 = IconTick : box121 = IconBlank;
    document.getElementById('box-Professionals').checked ? box122 = IconTick : box122 = IconBlank;
    document.getElementById('box-Technical and Trade Workers').checked ? box123 = IconTick : box123 = IconBlank;
    document.getElementById('box-Clerical and Administrative Workers').checked ? box124 = IconTick : box124 = IconBlank;
    document.getElementById('box-Sales Worker').checked ? box125 = IconTick : box125 = IconBlank;
    document.getElementById('box-Machinery Operators and Drivers').checked ? box126 = IconTick : box126 = IconBlank;
    document.getElementById('box-Labourers').checked ? box127 = IconTick : box127 = IconBlank;
    document.getElementById('box-Other').checked ? box128 = IconTick : box128 = IconBlank;
    document.getElementById('box-Community and Personal Service Worker').checked ? box129 = IconTick : box129 = IconBlank;
    document.getElementById('box-Agriculture, Forestry and Fishing').checked ? box130 = IconTick : box130 = IconBlank;
    document.getElementById('box-Mining').checked ? box131 = IconTick : box131 = IconBlank;
    document.getElementById('box-Manufacturing').checked ? box132 = IconTick : box132 = IconBlank;
    document.getElementById('box-Electricity, Gas, Water and Waste Services').checked ? box133 = IconTick : box133 = IconBlank;
    document.getElementById('box-Construction').checked ? box134 = IconTick : box134 = IconBlank;
    document.getElementById('box-Wholesale Trade').checked ? box135 = IconTick : box135 = IconBlank;
    document.getElementById('box-Retail Trade').checked ? box136 = IconTick : box136 = IconBlank;
    document.getElementById('box-Accommodation and Food Services').checked ? box137 = IconTick : box137 = IconBlank;
    document.getElementById('box-Transport, Postal and Warehousing').checked ? box138 = IconTick : box138 = IconBlank;
    document.getElementById('box-Information Media and Telecommunications').checked ? box139 = IconTick : box139 = IconBlank;
    document.getElementById('box-Financial and Insurance Service').checked ? box140 = IconTick : box140 = IconBlank;
    // document.getElementById('box-Manufacturing').checked ? box141 = IconTick : box141 = IconBlank;
    document.getElementById('box-Rental, Hiring and Real Estate Services').checked ? box142 = IconTick : box142 = IconBlank;
    document.getElementById('box-Professional, Scientific and Technical Services').checked ? box143 = IconTick : box143 = IconBlank;
    document.getElementById('box-Administrative and Support Services').checked ? box144 = IconTick : box144 = IconBlank;
    document.getElementById('box-Public Administration and Safety').checked ? box145 = IconTick : box145 = IconBlank;
    document.getElementById('box-Education and Training').checked ? box146 = IconTick : box146 = IconBlank;
    document.getElementById('box-Health Care and Social Assistance').checked ? box147 = IconTick : box147 = IconBlank;
    document.getElementById('box-Arts and Recreation Services').checked ? box148 = IconTick : box148 = IconBlank;
    document.getElementById('box-Other Services').checked ? box149 = IconTick : box149 = IconBlank;
    document.getElementById('box-Yes').checked ? box150 = IconTick : box150 = IconBlank;
    document.getElementById('box-No').checked ? box151 = IconTick : box151 = IconBlank;
    document.getElementById('boxYes').checked ? box150 = IconTick : box152 = IconBlank;
    document.getElementById('boxNo').checked ? box151 = IconTick : box153 = IconBlank;


    // Select option 
    question2 = document.getElementById('govtEnrolCourses').value;
    question3 = document.getElementById('govtFundedCourses').value;
    question4 = document.getElementById('sameLevelGovtFundedCourses').value;

    one2 = '0'; two2 = '1'; three2 = '2'; four2 = '3'; five2 = '4+';
    one3 = '0'; two3 = '1'; three3 = '2'; four3 = '3'; five3 = '4+';
    one4 = '0'; two4 = '1'; three4 = '2'; four4 = '3'; five4 = '4+';

    if (one2 == question2) {
        one2 = '(0)';
    } else if (two2 == question2) {
        two2 = '(1)';
    } else if (three2 == question2) {
        three2 = '(2)';
    } else if (four2 == question2) {
        four2 = '(3)';
    } else if (five2 == question2) {
        five2 = '(4+)';
    }
    if (one3 == question3) {
        one3 = '(0)';
    } else if (two3 == question3) {
        two3 = '(1)';
    } else if (three3 == question3) {
        three3 = '(2)';
    } else if (four3 == question3) {
        four3 = '(3)';
    } else if (five3 == question3) {
        five3 = '(4+)';
    }
    if (one4 == question4) {
        one4 = '(0)';
    } else if (two4 == question4) {
        two4 = '(1)';
    } else if (three4 == question4) {
        three4 = '(2)';
    } else if (four2 == question2) {
        four4 = '(3)';
    } else if (five4 == question4) {
        five4 = '(4+)';
    }

    console.log(document.getElementById("box47").value)


    var docDefinition = {

        // Footer Start
        footer: function (currentPage, pageCount) {
            return {
                table: {
                    widths: [90, 280, 80, 40, 45],
                    body: [
                        ["",
                            { text: '\nOptimistic Futures Pty Ltd TOID:41053 | Skills First Program Enrolment Agreement Form – JAN 19 – V2.6 ', italics: true, fontSize: 6 },
                            { text: "\nDated " + date, italics: true, fontSize: 6, bold: true },
                            { text: "" },
                            { text: currentPage.toString() + ' of ' + pageCount, alignment: 'center', fontSize: 9, color: 'white', fillColor: "green" }
                        ]
                    ]
                },
                layout: {
                    hLineColor: "#fff",
                    vLineColor: "#fff",
                    paddingTop: function (i, node) { return 5; },
                    paddingBottom: function (i, node) { return 5; },
                    paddingRight: function (i, node) { return 2; },
                    paddingLeft: function (i, node) { return 2; },

                }
            }
        },
        // Footer Closed






        margin: [0, 0, 0, 0],
        content:
            [
                {
                    table: {
                        widths: [100, 400],
                        body: [
                            [
                                {
                                    image: img,
                                    width: 150,
                                    height: 65,
                                    alignment: 'center'
                                },
                                {
                                    text: 'SKILLS FIRST PROGRAM \nENROLMENT AGREEMENT FORM', fontSize: 25, bold: true, alignment: "center", style: "text", margin: [0, 20, 0, 0]
                                },
                            ],
                            [
                                {
                                    style: 'paragraph',
                                    text: ""
                                },
                                {
                                    margin: [90, 0, 0, 0],
                                    style: 'paragraph',
                                    text: "OPTIMISTIC FUTURES TOID: 41053",
                                    bold: true
                                }
                            ]
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 0; },
                        paddingBottom: function (i, node) { return 0; },
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    }
                },
                '\n',
                {
                    style: "paragraph",
                    text: 'STUDENT INFORMATION SHEET ', bold: true, alignment: "left", fontSize: 12
                },
                "\n",
                {
                    style: "text",
                    text: 'Please read this Information Sheet before completing the Application Form. ',
                    alignment: "left",
                    bold: true,
                },
                {
                    style: "text",
                    text: ['An Application Form is required to be completed as part of the Enrolment Process into any qualification. All sections ', { text: "MUST", bold: true }, ' be answered.', { text: 'Your application cannot proceed without its completion.', bold: true, }],
                    alignment: "left",
                },
                '\n',
                {
                    style: "text",
                    text: 'A Language, Literacy and Numeracy Test & Pre-Training Review will be conducted as part of the Application Process.',
                    alignment: "left",
                },
                "\n",
                {
                    style: "text",
                    text: 'Optimistic Futures Pty Ltd encourages Recognition of Prior Learning, and recognizes qualifications and statement of Attainment issued by other RTOs for credit transfer purposes.',
                    alignment: "left",
                },
                "\n",
                {
                    style: 'tableExample',
                    table: {
                        widths: [100, 300,],
                        body: [
                            [
                                {
                                    text: " "
                                }, {
                                    text: "Detail of Fees (Subject to change without notification)",
                                    bold: true
                                },

                            ],
                        ]
                    }, layout: {
                        paddingTop: function (i, node) { return 0; },
                        paddingBottom: function (i, node) { return 0; },
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    }
                },
                {

                    table: {

                        widths: [120, 85, 85, 85, 85],
                        body: [
                            [{ text: 'Qualification', bold: true, margin: [0, 20, 0, 0], alignment: "center", style: "text", style: "text" },
                            { text: 'Concession Card Holder Fee (20 % of the standard Tuition Fee)', bold: true, alignment: "center", style: "text" }, { text: 'No Concession Card or Job Seeker Fee', bold: true, alignment: "center", style: "text" }, { text: 'Job Seeker with referral', bold: true, alignment: "center", style: "text" }, { text: 'Government Contribution (Approximate)', bold: true, alignment: "center", style: "text" }],
                            [{ text: 'CHC30113 Certificate III in Early Childhood Education and Care', bold: true, style: "text" }, { text: 'Tuition=$30.00', margin: [0, 20, 0, 0], alignment: "center", style: "text", bold: true }, { text: 'Tuition=$150.00', margin: [0, 20, 0, 0], alignment: "center", style: "text", bold: true }, { text: 'Tuition=$150.00', margin: [0, 20, 0, 0], alignment: "center", style: "text", bold: true }, { text: '$6216', margin: [0, 20, 0, 0], alignment: "center", style: "text", bold: true }],
                            [{ text: 'CHC50113 Diploma of Early Childhood Education and Care', bold: true, style: "text" }, { text: 'Tuition=$30.00', margin: [0, 20, 0, 0], alignment: "center", style: "text", bold: true }, { text: 'Tuition=$150.00', margin: [0, 20, 0, 0], alignment: "center", style: "text", bold: true }, { text: 'Tuition=$150.00', margin: [0, 20, 0, 0], alignment: "center", style: "text", bold: true }, { text: '$11748', margin: [0, 20, 0, 0], alignment: "center", style: "text", bold: true }],
                            [{ text: 'CPP20212 Certificate II in Security Operations', bold: true, style: "text", style: "text" }, { text: 'Tuition=$24.00', margin: [0, 20, 0, 0], alignment: "center", style: "text", bold: true }, { text: 'Tuition=$120.00', margin: [0, 20, 0, 0], alignment: "center", style: "text", bold: true }, { text: 'Tuition=$120.00', margin: [0, 20, 0, 0], alignment: "center", style: "text", bold: true }, { text: '$2190', margin: [0, 20, 0, 0], alignment: "center", style: "text", bold: true }],
                            [{ text: 'CPP30411 Certificate III in Security Operations', bold: true, style: "text" }, { text: 'Tuition=$24.00', margin: [0, 20, 0, 0], alignment: "center", style: "text", bold: true }, { text: 'Tuition=$120.00', margin: [0, 20, 0, 0], alignment: "center", style: "text", bold: true }, { text: 'Tuition=$120.00', margin: [0, 20, 0, 0], alignment: "center", style: "text", bold: true }, { text: '$2028', margin: [0, 20, 0, 0], alignment: "center", style: "text", bold: true }],
                            [{ text: 'CHC30115 Certificate III in Individual Support', bold: true, style: "text" }, { text: 'Tuition=$30.00', margin: [0, 20, 0, 0], alignment: "center", style: "text", bold: true }, { text: 'Tuition=$150.00', margin: [0, 20, 0, 0], alignment: "center", style: "text", bold: true }, { text: 'Tuition=$150.00', margin: [0, 20, 0, 0], alignment: "center", style: "text", bold: true }, { text: '$6077', margin: [0, 20, 0, 0], alignment: "center", style: "text", bold: true }],
                        ]
                    }
                },
                { text: '\nNote: ', style: 'text' },
                "\n",
                {
                    ul: [
                        { text: 'the above fees include student amenities and services\n\n', style: 'text', italics: true },
                        { text: 'all fees are paid upon enrolments\n\n', style: 'text', italics: true },
                        { text: 'the above fees are inclusive of GST\n\n', style: 'text', italics: true },
                        { text: 'The student tuition fees are indicative only and subject to change given individual circumstances at enrolment', style: 'text', italics: true },
                    ]
                },
                "\n",
                {
                    text: [{ text: "X ", fontSize: 12, bold: true }, { text: " If you are going through a financial hardship and you wish to waive the tuition fees please fill in the hardship form for consideration.", style: "text" }]
                },

                {
                    table: {
                        body: [
                            [
                                {
                                    style: 'paragraph',
                                    margin: [30, 0, 0, 0],
                                    text: [{ text: "\n Note: For detailed information regarding fees please refer to our statement of fees.", style: "text", bold: true, fontSize: 12, }]
                                }
                            ]
                        ]
                    },
                    layout: {
                        hLineColor: "#fff",
                        vLineColor: "#fff",
                    }
                },
                { text: "", pageBreak: 'before' },











                //***************************************1ST PAGE COMPLETED********************************* 






                {
                    table: {
                        widths: [100, 400],
                        body: [
                            [
                                {
                                    image: img,
                                    width: 150,
                                    height: 65,
                                    alignment: 'center',

                                },
                                {
                                    text: 'SKILLS FIRST PROGRAM \nENROLMENT AGREEMENT FORM', fontSize: 25, bold: true, alignment: "center", style: "text", margin: [0, 20, 0, 0]
                                },
                            ],
                            [
                                {
                                    style: 'paragraph',
                                    text: ""
                                },
                                {
                                    margin: [90, 0, 0, 0],
                                    style: 'paragraph',
                                    text: "OPTIMISTIC FUTURES TOID: 41053",
                                    bold: true
                                }
                            ]
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 0; },
                        paddingBottom: function (i, node) { return 0; },
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    }
                },
                '\n',
                { text: [{ text: 'This form is to be completed by an ', style: 'text' }, { text: ' Authorised Delegate ', bold: true, style: 'text' }, { text: 'at Optimistic Futures to establish whether students who enquire about completing a qualification - meet the eligibility requirements for government subsidised training under the Skills First Program.\n\n', style: 'text' }] }
                , '\n',
                { text: [{ text: 'As part of the enrolment process all Optimistic Futures - Authorised Delegates will ensure that applicants are aware of the consequences arising from a false, misleading or an incomplete declaration, including the possible withdrawal of any government subsidised training offer and/or the cancellation of enrolment.', style: 'text' }] }
                , "\n",


                {
                    text:
                        [
                            { text: '1.  Qualification Information\n\n', style: 'header' },
                            {
                                text: 'General information and individual brochures on Optimistic Futures qualifications are available on our website http://www.optimisticfutures.com.au or from reception at any of the Optimistic Futures Office.After you have selected a qualification for application, attempted LLN test and the Pre - Training Review: Complete all Parts of this application form:\n\nA-Personal and statistical details;\n\nB-Self declaration\n\n C–Optimistic Futures - Authorised Delegate Declaration\n\n', style: 'text'
                            },
                        ]
                },
                {
                    text:
                        [
                            { text: '2.  Supporting Documentation\n\n', style: 'header' },
                            {
                                text: 'Supporting documentation will be required in determining qualification entry requirements, funding eligibility, fees and fee concessions and to support a Credit transfer/RPL request.\n\n\Original documents will be returned but a copy of all documentation will be retained.\n\nOnce completed, this form and the associated declarations are to be placed in the students file.\n\n', style: 'text'
                            },
                        ]
                },
                {
                    text:
                        [
                            { text: '3.  Funding Eligibility - Skills First Program\n\n', style: 'header' },
                            {
                                text: 'The Skills First Program provides subsidised training for people who do not hold a post-school qualification or who want to gain a higher-level qualification than they already hold.\n\nEligibility for government funded subsidised training will be assessed according to specific eligibility requirements.\n\n', style: 'text'
                            },
                        ]
                },
                {
                    text:
                        [
                            { text: '4.  Fee Types\n\n', style: 'header' },
                            {
                                text: 'Fees for both Government Funded qualifications and Fee for Service qualifications will be assessed and levied on the basis of information supplied by the Applicant.\n\n\n\n\n\n\n\n\n\n\n', style: 'text'
                            },
                        ]
                },


                //***************************************2ND PAGE COMPLETED********************************* 


                {
                    table: {
                        widths: [100, 400],
                        body: [
                            [
                                {
                                    image: img,
                                    width: 150,
                                    height: 65,
                                    alignment: 'center',

                                },
                                {
                                    text: 'SKILLS FIRST PROGRAM \nENROLMENT AGREEMENT FORM', fontSize: 25, bold: true, alignment: "center", style: "text", margin: [0, 20, 0, 0]
                                },
                            ],
                            [
                                {
                                    style: 'paragraph',
                                    text: ""
                                },
                                {
                                    margin: [90, 0, 0, 0],
                                    style: 'paragraph',
                                    text: "OPTIMISTIC FUTURES TOID: 41053",
                                    bold: true
                                }
                            ]
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 0; },
                        paddingBottom: function (i, node) { return 0; },
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    }
                },

                {
                    text:
                        [
                            { text: '5.  Victorian Student Number (VSN)\n\n', style: 'header' },
                            {
                                text: 'The VSN is a student identification number that is assigned by the Department of Education and Early Childhood Development to all students in government and non-government schools, and students in Vocational Education and Training institutions. The number, which is unique to each student, is a key identifier on a student’s school records, and will remain with the student throughout his or her education, until reaching the age of 25. The VSN is nine digits long, randomly assigned, and tied to identifying information about the student (name, gender and date of birth). The Education and Training Reform Act 2006 requires Optimistic Futures to collect and disclose your personal information for a number of purposes including the allocation to you of a Victorian Student Number and updating your personal information on the Victorian Student Register.', style: 'text'
                            },
                        ]
                },
                {
                    text:
                        [
                            { text: '6.  A Unique Student Identifier (USI)\n\n', style: 'header' },
                            {
                                text: "Is a reference number made up of numbers and letters that gives students access to their USI account. A USI will allow an individual's USI account to be linked to the National Vocational Education and Training(VET) Data Collection allowing an individual to see all of their training results from all providers including all completed training units and qualifications.The Student Identifiers Act 2014, Standards for NVR Registered Training Organisations(RTO) 2014 and Student Identifiers Regulation 2014 require that the training Organisation: Collect a USI from each student, verify a USI supplied by a student and ensure a student has a valid USI before conferring a qualification or statement of attainment on that student.As of 1 January 2015, students will need to give their USI to each new training Organisation they enroll with.This will normally happen at enrolment", style: 'text'
                            },
                        ]
                },
                '\n',
                {
                    text:
                        [
                            { text: '7.	NCVER Survey:\n\n', style: 'header' },
                            {
                                text: "National Centre of Vocational Education Research may in the duration of your studies contact you to participate in a survey which may include the following:\n\nAn invitation to participate in a Department endorsed project:\n\nAn invitation to participate in the Department’s annual student outcome survey:\n\nContacted by the Department(or persons authorised by the Department) for audit, review or investigation purposes.\n\n\n\n\n", style: 'text'
                            },
                        ]
                },
                "\n",
                //***************************************3rd PAGE COMPLETED********************************* 
                {
                    pageBreak: 'before',
                    table: {
                        widths: [100, 400],
                        body: [
                            [
                                {
                                    image: img,
                                    width: 150,
                                    height: 65,
                                    alignment: 'center',

                                },
                                {
                                    text: 'SKILLS FIRST PROGRAM \nENROLMENT AGREEMENT FORM', fontSize: 25, bold: true, alignment: "center", style: "text", margin: [0, 20, 0, 0]
                                },
                            ],
                            [
                                {
                                    style: 'paragraph',
                                    text: ""
                                },
                                {
                                    margin: [90, 0, 0, 0],
                                    style: 'paragraph',
                                    text: "OPTIMISTIC FUTURES TOID: 41053",
                                    bold: true
                                }
                            ]
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 0; },
                        paddingBottom: function (i, node) { return 0; },
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    }
                },
                "\n",
                //***************************************4th PAGE COMPLETED********************************* 




                { text: "", pageBreak: 'before' },
                {
                    table: {
                        widths: [100, 400],
                        body: [
                            [
                                {
                                    image: img,
                                    width: 150,
                                    height: 60,
                                    alignment: 'center',

                                },
                                {
                                    text: 'SKILLS FIRST PROGRAM \nENROLMENT AGREEMENT FORM', fontSize: 18, bold: true, alignment: "center", style: "text", margin: [0, 20, 0, 0]
                                },
                            ],
                            [
                                {
                                    style: 'paragraph',
                                    text: ""
                                },
                                {
                                    margin: [80, 0, 0, 0],
                                    style: 'paragraph',
                                    text: "OPTIMISTIC FUTURES TOID: 41053",
                                    bold: true
                                }
                            ]
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 0; },
                        paddingBottom: function (i, node) { return 0; },
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    }
                },
                '\n',
                {
                    table: {
                        widths: [500],
                        body: [
                            [
                                {
                                    text: 'COURSE OF ENROLMENT', fillColor: "#484848", color: 'white', bold: true, style: "textSmall",
                                    border: [true, true, true, true]
                                },
                            ],
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 2; },
                        paddingBottom: function (i, node) { return 2; },
                        hLineColor: '#4f6228',
                        vLineColor: '#4f6228',
                    }
                },
                '\n',
                {
                    table: {
                        widths: [40, 130, 312],
                        body: [

                            [
                                { text: 'Tick', alignment: 'center', bold: true, fillColor: '#bfbfbf', style: "textSmall" }, { text: 'Course Code', bold: true, fillColor: '#bfbfbf', style: "textSmall" }, { text: 'Course Name', bold: true, fillColor: '#bfbfbf', style: "textSmall" }
                            ],
                            [
                                { image: box1, width: 17, height: 15, alignment: 'center', fillColor: '#f2f2f2', style: "textSmall" }, { text: 'CHC30113', fillColor: '#f2f2f2', style: "textSmall" }, { text: 'Certificate III in Early Childhood Education and Care', fillColor: '#f2f2f2', style: "textSmall" }
                            ],
                            [
                                { image: box2, width: 17, height: 15, alignment: 'center', fillColor: '#f2f2f2', style: "textSmall" }, { text: 'CHC50113', fillColor: '#f2f2f2', style: "textSmall" }, { text: 'Diploma of Early Childhood Education and Care', fillColor: '#f2f2f2', style: "textSmall" }
                            ],
                            [
                                { image: box3, width: 17, height: 15, alignment: 'center', fillColor: '#f2f2f2', style: "textSmall" }, { text: 'CPP20212', fillColor: '#f2f2f2', style: "textSmall" }, { text: 'Certificate II in Security Operations', fillColor: '#f2f2f2', style: "textSmall" }
                            ],
                            [
                                { image: box119, width: 17, height: 15, alignment: 'center', fillColor: '#f2f2f2', style: "textSmall" }, { text: 'CPP20212', fillColor: '#f2f2f2', style: "textSmall" }, { text: 'Certificate II in Security Operations(Control Room Operator)', fillColor: '#f2f2f2', style: "textSmall" }
                            ],
                            [
                                { image: box4, width: 17, height: 15, alignment: 'center', fillColor: '#f2f2f2' }, { text: 'CPP30411', fillColor: '#f2f2f2', style: "textSmall" }, { text: 'Certificate III in Security Operations', fillColor: '#f2f2f2', style: "textSmall" }
                            ],
                            [
                                { image: box120, width: 17, height: 15, alignment: 'center', fillColor: '#f2f2f2' }, { text: 'CPP30411', fillColor: '#f2f2f2', style: "textSmall" }, { text: 'Certificate III in Security Operations(Baton and Handcuffs)', fillColor: '#f2f2f2', style: "textSmall" }
                            ],
                            [
                                { image: box5, width: 17, height: 15, alignment: 'center', fillColor: '#f2f2f2' }, { text: 'CHC33015', fillColor: '#f2f2f2', style: "textSmall" }, { text: 'Certificate III in Individual Support', fillColor: '#f2f2f2', style: "textSmall" }
                            ],
                        ]
                    },
                    layout: {
                        hLineColor: '#484848',
                        vLineColor: '#484848',
                        hLineColor: '#484848',
                        vLineColor: '#484848',
                    },

                },
                "\n",
                {
                    style: 'tableExample',
                    table: {
                        widths: [100, 5, 60, 5, 90, 5, 40, 5, 40, 5, 40],
                        body: [
                            [{ text: 'Mode of Study:', style: "textSmall", bold: true },
                            { image: box6, width: 17, height: 15, alignment: 'center' }, { text: 'Classroom', style: "textSmall" },
                            { image: box7, width: 17, height: 15, alignment: 'center' }, { text: 'Distance Learning', style: "textSmall" },
                            { image: box8, width: 17, height: 15, alignment: 'center' }, { text: 'Online', style: "textSmall" },
                            { image: box9, width: 17, height: 15, alignment: 'center' }, { text: 'RPL', style: "textSmall" },
                            { image: box10, width: 17, height: 15, alignment: 'center' }, { text: 'CT', style: "textSmall" },
                            ],
                        ]
                    },
                    layout: {
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    },

                },
                '\n',
                {
                    table: {
                        widths: [500],
                        body: [
                            [
                                {
                                    text: 'PERSONAL DETAILS (Legal name as per photo ID, which will need to be sighted to verify legal name)', fillColor: "#484848", color: 'white', bold: true, style: "textSmall",
                                    border: [true, true, true, true]
                                },
                            ],
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 1; },
                        paddingBottom: function (i, node) { return 1; },
                        hLineColor: '#4f6228',
                        vLineColor: '#4f6228',
                    }
                },
                {
                    style: 'tableExample',
                    table: {
                        widths: [100, 5, 15, 5, 20, 5, 25, 5, 30, 35, 5, 25, 5, 33],
                        body: [
                            [{ text: 'Title: (please tick one) ', style: "textSmall", bold: true },
                            { image: box11, width: 17, height: 15, alignment: 'center' }, { text: 'Mr.', style: "textSmall" },
                            { image: box12, width: 17, height: 15, alignment: 'center' }, { text: 'Mrs', style: "textSmall" },
                            { image: box13, width: 17, height: 15, alignment: 'center' }, { text: 'Miss', style: "textSmall" },
                            { image: box14, width: 17, height: 15, alignment: 'center' }, { text: 'Ms', style: "textSmall" },
                            { text: 'Gender: ', style: "textSmall", bold: true },
                            { image: box15, width: 17, height: 15, alignment: 'center' }, { text: 'Male', style: "textSmall" },
                            { image: box16, width: 17, height: 15, alignment: 'center' }, { text: 'Female', style: "textSmall" },
                            ],
                        ]
                    },
                    layout: {
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    },

                },
                {
                    table: {
                        style: "paragraph",
                        widths: [58, 170, 70, 170],
                        body: [
                            [
                                {
                                    text: 'First Name:', bold: true,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, false]
                                },
                                {
                                    text: one,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, true]
                                },
                                {
                                    text: 'Middle Name:', bold: true,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, false]
                                },
                                {
                                    text: two,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, true]
                                },
                            ],
                        ]
                    },
                },

                {
                    table: {
                        style: "paragraph",
                        widths: [58, 170, 70, 170],
                        body: [
                            [
                                {
                                    text: 'Last Name:  ', bold: true,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, false]
                                },
                                {
                                    text: three,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, true]
                                },
                                {
                                    text: 'Date of Birth:', bold: true,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, false]
                                },
                                {
                                    text: four,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, true]
                                },
                            ],
                        ]
                    },
                },

                {
                    table: {
                        style: "paragraph",
                        widths: [93, 392],
                        body: [
                            [
                                {
                                    text: 'Residential Address:', bold: true,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, false]
                                },
                                {
                                    text: five,
                                    alignment: 'center',
                                    style: "textSmall",
                                    border: [false, false, false, true]
                                },
                            ],
                        ]
                    },
                },

                {
                    table: {
                        style: "paragraph",
                        widths: [64, 145, 30, 100, 47, 62],
                        body: [
                            [
                                {
                                    text: 'Suburb/Town:  ', bold: true,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, false]
                                },
                                {
                                    text: six,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, true]
                                },
                                {
                                    text: 'State:', bold: true,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, false]
                                },
                                {
                                    text: seven,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, true]
                                },
                                {
                                    text: 'Postcode:', bold: true,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, false]
                                },
                                {
                                    text: eight,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, true]
                                },
                            ],
                        ]
                    },
                },

                {
                    table: {
                        style: "paragraph",
                        widths: [70, 415],
                        body: [
                            [
                                {
                                    text: 'Postal Address:', bold: true,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, false]
                                },
                                {
                                    text: nine,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, true]
                                },
                            ],
                        ]
                    },
                },

                {
                    table: {
                        style: "paragraph",
                        widths: [62, 130, 35, 110, 30, 86],
                        body: [
                            [
                                {
                                    text: 'Home phone:  ', bold: true,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, false]
                                },
                                {
                                    text: ten,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, true]
                                },
                                {
                                    text: 'Mobile:', bold: true,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, false]
                                },
                                {
                                    text: eleven,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, true]
                                },
                                {
                                    text: 'Fax:', bold: true,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, false]
                                },
                                {
                                    text: twelve,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, true]
                                },
                            ],
                        ]
                    },
                },

                {
                    table: {
                        style: "paragraph",
                        widths: [30, 150, 125, 10, 100, 10, 25],
                        body: [
                            [
                                {
                                    text: 'Email:', bold: true,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, false]
                                },
                                {
                                    text: thirteen,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, true]
                                },
                                {
                                    text: 'Prefered method of contact:', bold: true,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, false]
                                },
                                { image: box17, width: 17, height: 15, style: "textSmall", alignment: 'center', border: [false, false, false, false] }, { text: 'Mobile/Home phone', style: "textSmall", border: [false, false, false, false] },
                                { image: box18, width: 17, height: 15, style: "textSmall", alignment: 'center', border: [false, false, false, false] }, { text: 'Email', style: "textSmall", border: [false, false, false, false] },
                            ],
                        ]
                    },
                },
                '\n',
                {
                    table: {
                        widths: [500],
                        body: [
                            [
                                {
                                    text: 'EMERGENCY CONTACT DETAILS', fillColor: "#484848", color: 'white', bold: true, style: "textSmall",
                                    border: [true, true, true, true]
                                },
                            ],
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 2; },
                        paddingBottom: function (i, node) { return 2; },
                        hLineColor: '#4f6228',
                        vLineColor: '#4f6228',
                    }
                },

                {
                    table: {
                        style: "paragraph",
                        widths: [30, 200, 65, 180],
                        body: [
                            [
                                {
                                    text: 'Name:  ', bold: true,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, false]
                                },
                                {
                                    text: forteen,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, true]
                                },
                                {
                                    text: 'Relationship:', bold: true,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, false]
                                },
                                {
                                    text: fifteen,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, true]
                                },
                            ],
                        ]
                    },
                },

                {
                    table: {
                        style: "paragraph",
                        widths: [65, 180, 37, 193],
                        body: [
                            [
                                {
                                    text: 'Home Number:  ', bold: true,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, false]
                                },
                                {
                                    text: sixteen,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, true]
                                },
                                {
                                    text: 'Mobile:', bold: true,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, false]
                                },
                                {
                                    text: seventeen,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, true]
                                },
                            ],
                        ]
                    },
                },
                {
                    table: {
                        style: "paragraph",
                        widths: [505],
                        body: [
                            [
                                {
                                    text: 'In the event of an emergency, do you give the RTO permission to organise emergency transport and treatment and agree to pay all',
                                    style: "textSmall",
                                    fontSize: 8.7,
                                    bold: true,
                                    border: [false, false, false, false]
                                },
                            ],
                        ]
                    },
                },
                {
                    table: {
                        style: "paragraph",
                        widths: [130, 140, 5, 15, 5, 15],
                        body: [
                            [
                                {
                                    text: 'costs related to the emergency?', bold: true,
                                    style: "textSmall",
                                    fontSize: 8.7,
                                    bold: true,
                                    border: [false, false, false, false]
                                },
                                {
                                    text: '(please tick one)', bold: true,
                                    style: "textSmall",
                                    fontSize: 8.7,
                                    color: 'grey',
                                    border: [false, false, false, false]
                                },
                                { image: box19, width: 17, height: 15, alignment: 'center' }, { text: 'Yes', style: "textSmall" },
                                { image: box20, width: 17, height: 15, alignment: 'center' }, { text: 'No', style: "textSmall" },
                            ],
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 0; },
                        paddingBottom: function (i, node) { return 0; },
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    }
                },
                {
                    table: {
                        widths: [500],
                        body: [
                            [
                                {
                                    text: 'CONCESSION DETAILS', fillColor: "#484848", color: 'white', bold: true, style: "textSmall",
                                    border: [true, true, true, true]
                                },
                            ],
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 2; },
                        paddingBottom: function (i, node) { return 2; },
                        hLineColor: '#4f6228',
                        vLineColor: '#4f6228',
                    }
                },
                "\n",
                {
                    table: {
                        style: "paragraph",
                        widths: [55, 180, 50, 185],
                        body: [
                            [
                                {
                                    text: 'Medicare No:  ', bold: true,
                                    style: "textSmall",
                                    border: [false, false, false, false]
                                },
                                {
                                    text: eighteen,
                                    style: "textSmall",
                                    border: [false, false, false, true]
                                },
                                {
                                    text: 'Expiry date:',
                                    style: 'textSmall',
                                    bold: true,
                                    border: [false, false, false, false]
                                },
                                {
                                    text: ninteen,
                                    style: 'textSmall',
                                    border: [false, false, false, true]
                                }
                            ],
                        ]
                    },
                },
                "\n\n",
                {
                    table: {
                        style: "paragraph",
                        widths: [85, 160, 50, 175],
                        body: [
                            [
                                {
                                    text: 'Concession Card No:  ', bold: true,
                                    style: "textSmall",
                                    border: [false, false, false, false]
                                },
                                {
                                    text: twenty,
                                    style: "textSmall",
                                    border: [false, false, false, true]
                                },
                                {
                                    text: 'Expiry date:',
                                    style: 'textSmall',
                                    bold: true,
                                    border: [false, false, false, false]
                                },
                                {
                                    text: twentyOne,
                                    style: 'textSmall',
                                    border: [false, false, false, true]
                                }
                            ],
                        ]
                    },
                },
                "\n",
                //***************************************5th PAGE COMPLETED********************************* 
                {
                    table: {
                        widths: [100, 400],
                        body: [
                            [
                                {
                                    image: img,
                                    width: 150,
                                    height: 65,
                                    alignment: 'center',

                                },
                                {
                                    text: 'SKILLS FIRST PROGRAM \nENROLMENT AGREEMENT FORM', fontSize: 25, bold: true, alignment: "center", style: "text", margin: [0, 20, 0, 0]
                                },
                            ],
                            [
                                {
                                    style: 'paragraph',
                                    text: ""
                                },
                                {
                                    margin: [90, 0, 0, 0],
                                    style: 'paragraph',
                                    text: "OPTIMISTIC FUTURES TOID: 41053",
                                    bold: true
                                }
                            ]
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 0; },
                        paddingBottom: function (i, node) { return 0; },
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    }
                },
                {
                    table: {
                        widths: [500],
                        body: [
                            [
                                {
                                    text: 'UNIQUE STUDENT IDENTIFIER (USI)', fillColor: "#484848", color: 'white', bold: true, style: "textSmall",
                                    border: [true, true, true, true]
                                },
                            ],
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 2; },
                        paddingBottom: function (i, node) { return 2; },
                        hLineColor: '#4f6228',
                        vLineColor: '#4f6228',
                    }
                },
                {
                    table: {
                        style: "paragraph",
                        widths: [325, 20, 135],
                        body: [
                            [
                                {
                                    text: 'I give permission for Optimistic Futures Pty Ltd to access my Unique Student Identifier (USI)',
                                    style: "textSmall",
                                    fontSize: 7,
                                    bold: true,
                                    border: [false, false, false, false]
                                },
                                {
                                    text: "",
                                    style: "textSmall",
                                    fontSize: 7,
                                    bold: true,
                                    border: [false, false, false, false]
                                },
                                {
                                    text: '',
                                    style: "textSmall",
                                    fontSize: 7,
                                    bold: true,
                                    border: [false, false, false, false]
                                },
                            ],
                            [
                                {
                                    text: 'for the purpose of recording my results.',
                                    style: "textSmall",
                                    fontSize: 7,
                                    bold: true,
                                    border: [false, false, false, false]
                                },
                                {
                                    text: 'USI:',
                                    style: "textSmall",
                                    fontSize: 8,
                                    bold: true,
                                    border: [false, false, false, false]
                                },
                                {
                                    text: twentyTwo, bold: true,
                                    style: "textSmall",
                                    fontSize: 7,
                                    border: [false, false, false, true],
                                },
                            ],
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 0; },
                        paddingBottom: function (i, node) { return 0; },
                        // hLineColor: '#fff',
                        // vLineColor: '#fff',
                        // hLineColor: '#fff',
                        // vLineColor: '#fff',
                    }
                },
                {
                    table: {
                        style: "paragraph",
                        widths: [325, 45, 110],
                        body: [
                            [
                                {
                                    text: 'If I do not have a USI in place, I am willing for Optimistic Futures Pty Ltd to set up my USI on my behalf.',
                                    style: "textSmall",
                                    fontSize: 7,
                                    bold: true,
                                    border: [false, false, false, false]
                                },
                                {
                                    text: '',
                                    style: "textSmall",
                                    fontSize: 7,
                                    bold: true,
                                    border: [false, false, false, false]
                                },
                                {
                                    text: '',
                                    style: "textSmall",
                                    fontSize: 7,
                                    bold: true,
                                    border: [false, false, false, false]
                                },
                            ],
                            [
                                {
                                    text: '*Please complete the USI form attached',
                                    style: "textSmall",
                                    fontSize: 7,
                                    bold: true,
                                    border: [false, false, false, false]
                                },
                                {
                                    text: 'Signature:',
                                    style: "textSmall",
                                    fontSize: 9,
                                    bold: true,
                                    border: [false, false, false, false]
                                },
                                {
                                    text: twentyThree, bold: true,
                                    style: "textSmall",
                                    fontSize: 7,
                                    border: [false, false, false, true]
                                },
                            ],
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 0; },
                        paddingBottom: function (i, node) { return 0; },
                    }
                },
                "\n",
                {
                    table: {
                        widths: [500],
                        body: [
                            [
                                {
                                    text: 'VICTORIAN STUDENT NUMBER (VSN)', fillColor: "#484848", color: 'white', bold: true, style: "textSmall",
                                    border: [true, true, true, true]
                                },
                            ],
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 2; },
                        paddingBottom: function (i, node) { return 2; },
                        hLineColor: '#4f6228',
                        vLineColor: '#4f6228',
                    }
                },
                "\n",
                {
                    table: {
                        style: "paragraph",
                        widths: [325, 25, 130],
                        body: [
                            [
                                {
                                    text: 'If you are under 25 years of age – you may have a VSN from pervious enrolment',
                                    style: "textSmall",
                                    fontSize: 7,
                                    bold: true,
                                    border: [false, false, false, false]
                                },
                                {
                                    text: 'VSN:',
                                    style: "textSmall",
                                    fontSize: 9,
                                    bold: true,
                                    border: [false, false, false, false]
                                },
                                {
                                    text: twentyFour, bold: true,
                                    style: "textSmall",
                                    fontSize: 7,
                                    border: [false, false, false, true]
                                },
                            ],
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 0; },
                        paddingBottom: function (i, node) { return 0; },
                    }
                },
                "\n",
                {
                    table: {
                        style: "paragraph",
                        widths: [242, 250],
                        body: [
                            [
                                {
                                    text: 'If you do not know your VSN number, then please state your Previous School:',
                                    style: "textSmall",
                                    fontSize: 7,
                                    bold: true,
                                    border: [false, false, false, false]
                                },
                                {
                                    text: twentyFive, bold: true,
                                    style: "textSmall",
                                    fontSize: 7,
                                    border: [false, false, false, true]
                                },
                            ],
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 0; },
                        paddingBottom: function (i, node) { return 0; },
                    }
                },
                '\n',
                {
                    table: {
                        widths: [350, 5, 20,],
                        body: [

                            [
                                { text: 'If new to the education sector – tick the ‘new’ box', style: "textSmall", fontSize: 7, bold: true }, { image: box21, width: 17, height: 15, alignment: 'center', style: "textSmall" }, { text: 'NEW', style: "textSmall" }
                            ],

                        ]
                    },
                    layout: {
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    },

                },
                {
                    table: {
                        widths: [450],
                        body: [
                            [

                                { text: 'This means you have never attended a Victorian School, TAFE or other Training Provider and are over the age of 25 at the time of enrolment.', style: "textSmall", fontSize: 7, bold: true }
                            ]
                        ]
                    },
                    layout: {
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    },

                },
                '\n',
                {
                    table: {
                        widths: [500],
                        body: [
                            [
                                {
                                    text: 'EMPLOYMENT', fillColor: "#484848", color: 'white', bold: true, style: "textSmall",
                                    border: [true, true, true, true]
                                },
                            ],
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 2; },
                        paddingBottom: function (i, node) { return 2; },
                        hLineColor: '#4f6228',
                        vLineColor: '#4f6228',
                    }
                },
                "",
                {
                    table: {
                        widths: [350, 90],
                        body: [
                            [
                                {
                                    text: 'A. Of the following categories, which BEST describes your current employment status?', bold: true, style: "textSmall",
                                },
                                {
                                    text: 'Tick ONE box only', bold: true, color: 'grey', style: "textSmall",
                                },
                            ],

                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 2; },
                        paddingBottom: function (i, node) { return 2; },
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    }
                },
                {
                    style: 'tableExample',
                    table: {
                        widths: [5, 200, 5, 200],
                        body: [
                            [
                                { image: box22, width: 17, height: 15, alignment: 'center' }, { text: 'Full-Time', style: "textSmall" },
                                { image: box26, width: 17, height: 15, alignment: 'center' }, { text: 'Unemployed - Seeking full-time work', style: "textSmall" },
                            ],
                            [
                                { image: box23, width: 17, height: 15, alignment: 'center' }, { text: 'Employer', style: "textSmall" },
                                { image: box27, width: 17, height: 15, alignment: 'center' }, { text: 'Employed - Unpaid worker in a family business', style: "textSmall" },
                            ],
                            [
                                { image: box24, width: 17, height: 15, alignment: 'center' }, { text: 'Part-Time', style: "textSmall" },
                                { image: box28, width: 17, height: 15, alignment: 'center' }, { text: 'Unemployed - Seeking part-time work', style: "textSmall" },
                            ],
                            [
                                { image: box25, width: 17, height: 15, alignment: 'center' }, { text: 'Self-employed - not employing others', style: "textSmall" },
                                { image: box29, width: 17, height: 15, alignment: 'center' }, { text: 'Not employed - Not seeking employment', style: "textSmall" },
                            ],
                        ]
                    },
                    layout: {
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    },
                },
                // second heading
                "",
                {
                    table: {
                        widths: [350, 90],
                        body: [
                            [
                                {
                                    text: 'B. Which of the following classification BEST describes your current or recent occupation? Tick ONE box only', bold: true, style: "textSmall",
                                },
                                {
                                    text: 'Tick ONE box only', bold: true, color: 'grey', style: "textSmall",
                                },
                            ],

                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 2; },
                        paddingBottom: function (i, node) { return 2; },
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    }
                },
                {
                    style: 'tableExample',
                    table: {
                        widths: [2, 150, 2, 210, 2, 150],
                        body: [
                            [
                                { image: box121, width: 17, height: 15, alignment: 'center' }, { text: 'MANAGER', style: "textSmall" },
                                { image: box124, width: 17, height: 15, alignment: 'center' }, { text: 'CLERICAL AND ADMINISTRATIVE WORKERS)', style: "textSmall" },
                                { image: box127, width: 17, height: 15, alignment: 'center' }, { text: 'LABOURERS', style: "textSmall" },
                            ],
                            [
                                { image: box122, width: 17, height: 15, alignment: 'center' }, { text: 'PROFESSIONALS', style: "textSmall" },
                                { image: box125, width: 17, height: 15, alignment: 'center' }, { text: 'SALES WORKER', style: "textSmall" },
                                { image: box129, width: 17, height: 15, alignment: 'center' }, { text: 'COMMUNITY AND PERSONAL SERVICE WORKER', style: "textSmall" },
                            ],
                            [
                                { image: box123, width: 17, height: 15, alignment: 'center' }, { text: 'TECHNICAL AND TRADE WORKERS', style: "textSmall" },
                                { image: box126, width: 17, height: 15, alignment: 'center' }, { text: 'MACHINERY OPERATORS AND DRIVERS', style: "textSmall" },
                                { image: box128, width: 17, height: 15, alignment: 'center' }, { text: 'OTHER', style: "textSmall" },
                            ],
                        ]
                    },
                    layout: {
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    },
                },
                // End Second
                // second heading
                "",
                {
                    table: {
                        widths: [350, 90],
                        body: [
                            [
                                {
                                    text: 'C.   Which of the following classification BEST describes the industry of your current or previous Employer?', bold: true, style: "textSmall",
                                },
                                {
                                    text: 'Tick ONE box only', bold: true, color: 'grey', style: "textSmall",
                                },
                            ],

                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 2; },
                        paddingBottom: function (i, node) { return 2; },
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    }
                },
                {
                    style: 'tableExample',
                    table: {
                        widths: [2, 120, 2, 210, 2, 170],
                        body: [
                            [
                                { image: box130, width: 17, height: 15, alignment: 'center' }, { text: 'AGRICULTURE, FORESTRY AND FISHING', style: "textSmall" },
                                { image: box137, width: 17, height: 15, alignment: 'center' }, { text: 'ACCOMMODATION AND FOOD SERVICES', style: "textSmall" },
                                { image: box144, width: 17, height: 15, alignment: 'center' }, { text: 'PROFESSIONAL, SCIENTIFIC AND TECHNICAL SERVICES', style: "textSmall" },
                            ],
                            [
                                { image: box131, width: 17, height: 15, alignment: 'center' }, { text: 'MINING', style: "textSmall" },
                                { image: box138, width: 17, height: 15, alignment: 'center' }, { text: 'TRANSPORT, POSTAL AND WAREHOUSING', style: "textSmall" },
                                { image: box145, width: 17, height: 15, alignment: 'center' }, { text: 'ADMINISTRATIVE AND SUPPORT SERVICES', style: "textSmall" },
                            ],
                            [
                                { image: box132, width: 17, height: 15, alignment: 'center' }, { text: 'MANUFACTURING', style: "textSmall" },
                                { image: box139, width: 17, height: 15, alignment: 'center' }, { text: 'INFORMATION MEDIA AND TELECOMMUNICATIONS', style: "textSmall" },
                                { image: box146, width: 17, height: 15, alignment: 'center' }, { text: 'PUBLIC ADMINISTRATION AND SAFETY', style: "textSmall" },
                            ],
                            [
                                { image: box133, width: 17, height: 15, alignment: 'center' }, { text: 'ELECTRICITY, GAS, WATER AND WASTE SERVICES', style: "textSmall" },
                                { image: box140, width: 17, height: 15, alignment: 'center' }, { text: 'FINANCIAL AND INSURANCE SERVICE', style: "textSmall" },
                                { image: box147, width: 17, height: 15, alignment: 'center' }, { text: 'EDUCATION AND TRAINING', style: "textSmall" },
                            ],
                            [
                                { image: box134, width: 17, height: 15, alignment: 'center' }, { text: 'CONSTRUCTION', style: "textSmall" },
                                { image: box142, width: 17, height: 15, alignment: 'center' }, { text: 'RENTAL, HIRING AND REAL ESTATE SERVICES', style: "textSmall" },
                                { image: box148, width: 17, height: 15, alignment: 'center' }, { text: 'HEALTH CARE AND SOCIAL ASSISTANCE', style: "textSmall" },
                            ],
                            [
                                { image: box135, width: 17, height: 15, alignment: 'center' }, { text: 'WHOLESALE TRADE', style: "textSmall" },
                                { image: box143, width: 17, height: 15, alignment: 'center' }, { text: 'ARTS AND RECREATION SERVICES', style: "textSmall" },
                                { image: box149, width: 17, height: 15, alignment: 'center' }, { text: 'RETAIL TRADE', style: "textSmall" },
                            ],
                            [
                                { text: "" }, { text: '', style: "textSmall" },
                                { text: "" }, { text: '', style: "textSmall" },
                                { image: box136, width: 17, height: 15, alignment: 'center' }, { text: 'OTHER SERVICES', style: "textSmall" },
                            ],
                        ]
                    },
                    layout: {
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    },
                },
                // End Second
                {
                    pageBreak: "before",
                    table: {
                        widths: [500],
                        body: [
                            [
                                {
                                    text: 'EMPLOYMENT DETAILS (if applicable)', fillColor: "#484848", color: 'white', bold: true, style: "textSmall",
                                    border: [true, true, true, true]
                                },
                            ],
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 2; },
                        paddingBottom: function (i, node) { return 2; },
                        hLineColor: '#4f6228',
                        vLineColor: '#4f6228',
                    }
                },

                {
                    table: {

                        style: "paragraph",
                        widths: [55, 200, 37, 180],
                        body: [
                            [
                                {
                                    margin: [0, 4, 0, 0],
                                    text: 'Organisation:', bold: true,
                                    style: "textSmall",
                                    alignment: 'right',
                                    border: [false, false, false, false]
                                },
                                {
                                    text: twentySix,
                                    style: "textSmall",
                                    border: [false, false, false, true]
                                },
                                {
                                    margin: [0, 4, 0, 0],
                                    text: 'Position:', bold: true,
                                    style: "textSmall",
                                    alignment: 'right',
                                    border: [false, false, false, false]
                                },
                                {
                                    text: twentySeven,
                                    style: 'textSmall',
                                    border: [false, false, false, true]
                                },
                            ],
                        ]
                    },
                },

                {
                    table: {
                        style: "paragraph",
                        margin: [0, 3, 0, 0],
                        widths: [45, 450],
                        body: [
                            [
                                {
                                    margin: [0, 6, 0, 0],
                                    text: 'Address:', bold: true,
                                    style: "textSmall",
                                    alignment: 'center',
                                    border: [false, false, false, false]
                                },
                                {
                                    text: twentyEight,
                                    style: "textSmall",
                                    border: [false, false, false, true]
                                },
                            ],
                        ]
                    },
                },

                {
                    table: {
                        style: "paragraph",
                        margin: [0, 3, 0, 0],
                        widths: [45, 160, 22, 250],
                        body: [
                            [
                                {
                                    margin: [0, 6, 0, 0],
                                    text: 'Telephone', bold: true,
                                    style: "textSmall",
                                    alignment: 'right',
                                    border: [false, false, false, false]
                                },
                                {
                                    text: twentyNine,
                                    style: "textSmall",
                                    border: [false, false, false, true]
                                },
                                {
                                    margin: [0, 4, 0, 0],
                                    text: 'ABN:', bold: true,
                                    style: "textSmall",
                                    alignment: 'right',
                                    border: [false, false, false, false]
                                },
                                {
                                    text: thirty,
                                    style: 'textSmall',
                                    border: [false, false, false, true]
                                },
                            ],
                        ]
                    },
                },
                "\n",
                {
                    table: {
                        widths: [500],
                        body: [
                            [
                                {
                                    text: 'SCHOOLING', fillColor: "#484848", color: 'white', bold: true, style: "textSmall",
                                    border: [true, true, true, true]
                                },
                            ],
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 2; },
                        paddingBottom: function (i, node) { return 2; },
                        hLineColor: '#4f6228',
                        vLineColor: '#4f6228',
                    }
                },
                "\n",
                {
                    table: {
                        widths: [250, 150],
                        body: [
                            [
                                {
                                    text: 'What is your highest COMPLETED school Level:', bold: true, style: "textSmall",
                                },
                                {
                                    text: 'Please tick ONE box only', bold: true, color: 'grey', style: "textSmall",
                                },
                            ],

                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 2; },
                        paddingBottom: function (i, node) { return 2; },
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    }
                },
                {
                    style: 'tableExample',
                    table: {
                        widths: [4, 150, 4, 150, 4, 150],
                        body: [
                            [
                                { image: box30, width: 17, height: 15, alignment: 'center' }, { text: 'Year 12 or equivalent', style: "textSmall" },
                                { image: box32, width: 17, height: 15, alignment: 'center' }, { text: 'Year 11 or equivalent', style: "textSmall" },
                                { image: box34, width: 17, height: 15, alignment: 'center' }, { text: 'Year 10 or equivalent', style: "textSmall" },
                            ],
                            [
                                { image: box31, width: 17, height: 15, alignment: 'center' }, { text: 'Year 9 or equivalent', style: "textSmall" },
                                { image: box33, width: 17, height: 15, alignment: 'center' }, { text: 'Year 8 or equivalent', style: "textSmall" },
                                { image: box35, width: 17, height: 15, alignment: 'center' }, { text: 'Never Attended', style: "textSmall" },
                            ],
                        ]
                    },
                    layout: {
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    },
                },
                {
                    table: {

                        style: "paragraph",
                        widths: [215, 100, 150,],
                        body: [
                            [
                                {
                                    margin: [0, 4, 0, 0],
                                    text: 'In which YEAR did you complete that Schooling Level:', bold: true,
                                    style: "textSmall",
                                    alignment: 'left',
                                    border: [false, false, false, false]
                                },
                                {
                                    text: thirtyOne,
                                    alignment: 'center',
                                    style: "textSmall",
                                    border: [false, false, false, true]
                                },
                                {
                                    margin: [0, 4, 0, 0],
                                    text: 'e.g. 2008, 2005 etc ', bold: true,
                                    style: "textSmall",
                                    alignment: 'left',
                                    border: [false, false, false, false]
                                },
                            ],
                        ]
                    },
                },
                "\n",
                {
                    style: 'tableExample',
                    table: {
                        widths: [220, 4, 150, 4, 150],
                        body: [
                            [
                                { text: 'Are you still attending secondary school?', style: "textSmall", bold: true },
                                { image: box36, width: 17, height: 15, alignment: 'right' }, { text: 'Yes', style: "textSmall", bold: true },
                                { image: box37, width: 17, height: 15, alignment: 'right' }, { text: 'No', style: "textSmall", bold: true },
                            ],
                        ]
                    },
                    layout: {
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    },

                },
                //***************************************5th PAGE COMPLETED********************************* 
                "\n\n",
                {
                    table: {
                        widths: [500],
                        body: [
                            [
                                {
                                    text: 'PREVIOUS QUALIFICATIONS ACHIEVED', fillColor: "#484848", color: 'white', bold: true, style: "textSmall",
                                    border: [true, true, true, true]
                                },
                            ],
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 2; },
                        paddingBottom: function (i, node) { return 2; },
                        hLineColor: '#4f6228',
                        vLineColor: '#4f6228',
                    }
                },
                {
                    style: 'tableExample',
                    table: {
                        widths: [295, 4, 30, 4, 21, 110],
                        body: [
                            [
                                { text: 'Have you SUCCESSFULLY completed any of the following qualifications?', style: "textSmall", bold: true },
                                { image: box36, width: 17, height: 15, alignment: 'right' }, { text: 'Yes', style: "textSmall", bold: true },
                                { image: box37, width: 17, height: 15, alignment: 'right' }, { text: 'No', style: "textSmall", bold: true },
                                { text: 'if Yes, please tick ANY applicable boxes', fontSize: 6, color: 'grey', margin: [0, 5, 0, 0] },
                            ],
                        ]
                    },
                    layout: {
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    },
                },
                {
                    style: 'tableExample',
                    table: {
                        widths: [4, 82, 4, 210, 4, 170],
                        body: [
                            [
                                { image: box40, width: 17, height: 15, alignment: 'center' }, { text: 'Certificate I', style: "textSmall" },
                                { image: box43, width: 17, height: 15, alignment: 'center' }, { text: 'Certificate III (or Trade Certificate)', style: "textSmall" },
                                { image: box46, width: 17, height: 15, alignment: 'center' }, { text: 'Advance diploma or Associcate Degree', style: "textSmall" },
                            ],
                            [
                                { image: box41, width: 17, height: 15, alignment: 'center' }, { text: 'Certificate II', style: "textSmall" },
                                { image: box44, width: 17, height: 15, alignment: 'center' }, { text: 'Certificate IV (or Advance Certificate/ Technician)', style: "textSmall" },
                                { image: box47, width: 17, height: 15, alignment: 'center' }, { text: 'Bachelor degree or Higher degree', style: "textSmall" },
                            ],
                            [
                                { image: box42, width: 17, height: 15, alignment: 'center' }, { text: 'Certificate II', style: "textSmall" },
                                { image: box45, width: 17, height: 15, alignment: 'center' }, { text: 'Diploma (or Associate Diploma)', style: "textSmall" },
                                { image: box48, width: 17, height: 15, alignment: 'center' }, { text: 'Certificates other than the above', style: "textSmall" },
                            ],
                        ]
                    },
                    layout: {
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    },
                },
                {
                    table: {
                        style: "paragraph",
                        widths: [120, 370],
                        body: [
                            [
                                {
                                    text: 'Details of another Certificate: ', bold: true,
                                    style: "textSmall",
                                    alignment: 'left',
                                    border: [false, false, false, false]
                                },
                                {
                                    text: thirtyTwo,
                                    alignment: 'center',
                                    style: "textSmall",
                                    border: [false, false, false, true]
                                },
                            ],
                        ]
                    },
                },
                {

                    table: {
                        widths: [250, 4, 50, 4, 50, 4, 100],
                        body: [
                            [
                                { text: 'Please tick where the qualification was completed:', style: "textSmall", bold: true },
                                { image: box49, width: 17, height: 15, alignment: 'center' }, { text: 'Australia', style: "textSmall", bold: true },
                                { image: box50, width: 17, height: 15, alignment: 'center' }, { text: 'Overseas', style: "textSmall", bold: true },
                                { image: box51, width: 17, height: 15, alignment: 'center' }, { text: 'Australian equivalent', style: "textSmall", bold: true },
                            ],
                        ]
                    },
                    layout: {
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    },
                },
                "\n",
                {
                    table: {
                        widths: [500],
                        body: [
                            [
                                {
                                    text: 'LANGUAGE & CULTURAL DIVERSITY', fillColor: "#484848", color: 'white', bold: true, style: "textSmall",
                                    border: [true, true, true, true]
                                },
                            ],
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 2; },
                        paddingBottom: function (i, node) { return 2; },
                        hLineColor: '#4f6228',
                        vLineColor: '#4f6228',
                    }
                },
                "\n",
                {

                    table: {
                        widths: [66, 4.5, 50, 26, 316],
                        body: [
                            [
                                { text: 'Country of Birth:', style: "textSmall", border: [false, false, false, false] },
                                { image: box54, width: 17, height: 15, alignment: 'left', border: [false, false, false, false] }, { text: 'Australia', style: "textSmall", border: [false, false, false, false] },
                                { text: 'Other:', style: "textSmall", border: [false, false, false, false], bold: true },
                                {
                                    text: thirtyThree,
                                    alignment: 'center',
                                    style: "textSmall", border: [false, false, false, true]
                                },
                            ],

                        ]
                    },
                },
                {

                    table: {
                        widths: [66, 250],
                        body: [
                            [
                                { text: 'City of birth:', style: "textSmall", border: [false, false, false, false] },
                                {
                                    text: thirtyFour,
                                    alignment: 'center',
                                    style: "textSmall",
                                    border: [false, false, false, true]
                                },
                            ],

                        ]
                    },
                },
                "\n",
                {

                    table: {
                        widths: [230, 4.5, 70, 4.5, 15, 130],
                        dontBreakRows: true,
                        body: [
                            [
                                { text: 'Are you an Australian Citizen/Permanent Resident?', style: "textSmall", border: [false, false, false, false] },
                                { image: box151, width: 17, height: 15, alignment: 'left', border: [false, false, false, false] }, { text: 'Yes', style: "textSmall", border: [false, false, false, false] },
                                { image: box152, width: 17, height: 15, alignment: 'left', border: [false, false, false, false] }, { text: 'No', style: "textSmall", border: [false, false, false, false] },
                                { text: '', style: "textSmall", border: [false, false, false, false] },
                            ],
                            [
                                { text: 'If NO, Please State your Visa Classification (if applicable) – e.g. Visa Subclass 457: ', colSpan: 4, style: "textSmall", border: [false, false, false, false] },
                                { text: '', style: "textSmall", border: [false, false, false, false] },
                                { text: '', style: "textSmall", border: [false, false, false, false] },
                                { text: '', style: "textSmall", border: [false, false, false, false] },
                                { text: '', style: "textSmall", border: [false, false, false, false] },
                                {
                                    text: fortyThree,
                                    alignment: 'center',
                                    style: "textSmall",
                                    border: [false, false, false, true]
                                },
                            ],
                            [
                                { text: '', style: "textSmall", border: [false, false, false, false] },
                                { text: "", border: [false, false, false, false] }, { text: '', style: "textSmall", border: [false, false, false, false] },
                                { text: "", border: [false, false, false, false] }, { text: '', style: "textSmall", border: [false, false, false, false] },
                                { text: 'Attach Evidence with the form', fontSize: 7, color: "grey", alignment: "right", border: [false, false, false, false] },
                            ],
                            [
                                { text: 'Do you speak a Language other than English at home:', style: "textSmall", border: [false, false, false, false] },
                                { image: box53, width: 17, height: 15, alignment: 'left', border: [false, false, false, false] }, { text: 'No, only English', style: "textSmall", border: [false, false, false, false] },
                                { image: box54, width: 17, height: 15, alignment: 'left', border: [false, false, false, false] }, { text: 'Yes', style: "textSmall", border: [false, false, false, false] },
                                { text: thirtyFive, style: "textSmall", border: [false, false, false, true] },
                            ],
                            [
                                { text: '', style: "textSmall", border: [false, false, false, false] },
                                { text: "", border: [false, false, false, false] }, { text: '', style: "textSmall", border: [false, false, false, false] },
                                { text: "", border: [false, false, false, false] }, { text: '', style: "textSmall", border: [false, false, false, false] },
                                { text: '(Please Specify)', fontSize: 7, color: "grey", alignment: "right", border: [false, false, false, false] },
                            ],

                        ]
                    },
                },
                {
                    table: {
                        widths: [230, 4.5, 50, 4.5, 50, 4.5, 50, 4.5, 50,],
                        body: [
                            [
                                { text: 'How well do you speak english:', style: "textSmall", border: [false, false, false, false] },
                                { image: box55, width: 17, height: 15, alignment: 'left', border: [false, false, false, false] }, { text: 'Very well', style: "textSmall", border: [false, false, false, false] },
                                { image: box56, width: 17, height: 15, alignment: 'left', border: [false, false, false, false] }, { text: 'Well', style: "textSmall", border: [false, false, false, false] },
                                { image: box57, width: 17, height: 15, alignment: 'left', border: [false, false, false, false] }, { text: 'Not Well', style: "textSmall", border: [false, false, false, false] },
                                { image: box58, width: 17, height: 15, alignment: 'left', border: [false, false, false, false] }, { text: 'Not at all', style: "textSmall", border: [false, false, false, false] },
                            ],

                        ]
                    },
                },

                {
                    style: 'tableExample',
                    table: {
                        widths: [230, 4.5, 50, 4.5, 50, 4.5, 35, 4.5, 65,],
                        body: [
                            [
                                { text: 'Are you of Aboriganl or Torres Strait Islander origin?', style: "textSmall", border: [false, false, false, false] },
                                { image: box59, width: 17, height: 15, alignment: 'left', border: [false, false, false, false] }, { text: 'No', style: "textSmall", border: [false, false, false, false] },
                                { text: '', style: "textSmall", border: [false, false, false, false] }, { text: '', style: "textSmall", border: [false, false, false, false] },
                                { text: '', style: "textSmall", border: [false, false, false, false] }, { text: '', style: "textSmall", border: [false, false, false, false] },
                                { image: box60, width: 17, height: 15, alignment: 'left', border: [false, false, false, false] }, { text: 'Yes, Aboriginal', style: "textSmall", border: [false, false, false, false] },
                            ],

                        ]
                    },
                },
                {
                    style: 'tableExample',
                    table: {
                        widths: [230, 4.5, 130, 4.5, 0, 4.5, 5, 4.5, 65,],
                        body: [
                            [
                                { text: '', style: "textSmall", border: [false, false, false, false], bold: true },
                                { image: box61, width: 17, height: 15, alignment: 'left', border: [false, false, false, false] }, { text: 'Yes, Torres Strait Islander', style: "textSmall", border: [false, false, false, false], bold: true },
                                { text: '', style: "textSmall", border: [false, false, false, false] }, { text: '', style: "textSmall", border: [false, false, false, false], bold: true },
                                { text: '', style: "textSmall", border: [false, false, false, false] }, { text: '', style: "textSmall", border: [false, false, false, false], bold: true },
                                { image: box62, width: 17, height: 15, alignment: 'left', border: [false, false, false, false] }, { text: 'Yes, Both', style: "textSmall", border: [false, false, false, false], bold: true },
                            ],

                        ]
                    },
                },
                {
                    pageBreak: "before",
                    table: {
                        widths: [100, 400],
                        body: [
                            [
                                {
                                    image: img,
                                    width: 150,
                                    height: 65,
                                    alignment: 'center',

                                },
                                {
                                    text: 'SKILLS FIRST PROGRAM \nENROLMENT AGREEMENT FORM', fontSize: 25, bold: true, alignment: "center", style: "text", margin: [0, 20, 0, 0]
                                },
                            ],
                            [
                                {
                                    style: 'paragraph',
                                    text: ""
                                },
                                {
                                    margin: [90, 0, 0, 0],
                                    style: 'paragraph',
                                    text: "OPTIMISTIC FUTURES TOID: 41053",
                                    bold: true
                                }
                            ]
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 0; },
                        paddingBottom: function (i, node) { return 0; },
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    }
                },
                '\n',
                {
                    table: {
                        widths: [500],
                        body: [
                            [
                                {
                                    text: 'DISABILITY', fillColor: "#484848", color: 'white', bold: true, style: "textSmall",
                                    border: [true, true, true, true]
                                },
                            ],
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 2; },
                        paddingBottom: function (i, node) { return 2; },
                        hLineColor: '#4f6228',
                        vLineColor: '#4f6228',
                    }
                },
                "\n",
                {
                    style: 'tableExample',
                    table: {
                        widths: [350, 4.5, 50, 4.5, 50],
                        body: [
                            [
                                { text: 'Do you consider yourself to have a disability, impairment or long-term condition?', fontSize: 9, border: [false, false, false, false], bold: true },
                                { image: box63, width: 17, height: 15, alignment: 'left', border: [false, false, false, false] }, { text: 'Yes', style: "textSmall", border: [false, false, false, false], bold: true },
                                { image: box64, width: 17, height: 15, alignment: 'left', border: [false, false, false, false] }, { text: 'No', style: "textSmall", border: [false, false, false, false], bold: true },
                            ],

                        ]
                    },
                },
                {
                    style: 'tableExample',
                    table: {
                        widths: [390, 4.5, 12, 4.5, 12],
                        body: [
                            [
                                { text: 'If yes, then please indicate the areas of a disability, impairment or long-term condition:', fontSize: 9, border: [false, false, false, false], bold: true },
                                { text: "", border: [false, false, false, false] }, { text: '', style: "textSmall", border: [false, false, false, false], bold: true },
                                { text: "", border: [false, false, false, false] }, { text: '', style: "textSmall", border: [false, false, false, false], bold: true },
                            ],

                        ]
                    },
                },
                {
                    table: {
                        widths: [4.5, 105, 4.5, 105, 4.5, 105, 4.5, 105],
                        body: [

                            [
                                { image: box65, width: 17, height: 15, alignment: 'center', style: "textSmall" }, { text: 'Hearing/Deaf', style: "textSmall" },
                                { image: box66, width: 17, height: 15, alignment: 'center', style: "textSmall" }, { text: 'Physical', style: "textSmall" },
                                { image: box67, width: 17, height: 15, alignment: 'center', style: "textSmall" }, { text: 'Intellectual', style: "textSmall" },
                                { image: box68, width: 17, height: 15, alignment: 'center', style: "textSmall" }, { text: 'Learning', style: "textSmall" }
                            ],
                            [
                                { image: box69, width: 17, height: 15, alignment: 'center', style: "textSmall" }, { text: 'Mental Illness', style: "textSmall" },
                                { image: box70, width: 17, height: 15, alignment: 'center', style: "textSmall" }, { text: 'Vision', style: "textSmall" },
                                { image: box71, width: 17, height: 15, alignment: 'center', style: "textSmall" }, { text: 'Medical Condition', style: "textSmall" },
                                { image: box72, width: 17, height: 15, alignment: 'center', style: "textSmall" }, { text: 'Acquired brain impairment', style: "textSmall" }
                            ],
                        ]
                    },
                    layout: {
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    },

                },
                {
                    table: {
                        widths: [4.5, 24, 150],
                        body: [

                            [
                                { image: IconBlank, width: 17, height: 15, alignment: 'center', style: "textSmall", border: [false, false, false, false] }, { text: 'Other:  ', style: "textSmall", border: [false, false, false, false] },
                                { text: thirtySix, style: "textSmall", border: [false, false, false, true] }
                            ],
                            [
                                { text: "", border: [false, false, false, false] }, { text: '', style: "textSmall", border: [false, false, false, false] },
                                { text: 'Please Specify ', color: 'grey', border: [false, false, false, false], fontSize: 8, alignment: "center" }
                            ],
                        ]
                    }

                },
                {
                    table: {
                        widths: [500],
                        body: [
                            [
                                {
                                    text: 'STUDY REASON', fillColor: "#484848", color: 'white', bold: true, style: "textSmall",
                                    border: [true, true, true, true]
                                },
                            ],
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 2; },
                        paddingBottom: function (i, node) { return 2; },
                        hLineColor: '#4f6228',
                        vLineColor: '#4f6228',
                    }
                },
                "\n",
                {
                    style: 'tableExample',
                    table: {
                        widths: [400],
                        body: [
                            [
                                {
                                    text:
                                        [
                                            { text: 'Of the following categories, which BEST describes your main Reason for undertaking this course/traineeship/  ', fontSize: 8, border: [false, false, false, false], bold: true },
                                            { text: 'apprenticeship? ', fontSize: 8, border: [false, false, false, false], bold: true }, { text: 'Tick only ONE ', fontSize: 8, border: [false, false, false, false], color: "grey" },
                                        ]
                                }
                            ]
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 0; },
                        paddingBottom: function (i, node) { return 0; },
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    }
                },
                {
                    table: {
                        widths: [4, 170, 4, 130, 4, 170],
                        body: [
                            [
                                { image: box73, width: 17, height: 15, }, { text: 'To get a job', style: "textSmall" },
                                { image: box77, width: 17, height: 15, }, { text: 'To develop my existing business', style: "textSmall" },
                                { text: '', style: "textSmall" }, { text: '', style: "textSmall" },
                            ],
                            [
                                { image: box74, width: 17, height: 15, }, { text: 'To start my own business', style: "textSmall" },
                                { image: box78, width: 17, height: 15, }, { text: 'To try for a different career', style: "textSmall" },
                                { text: "" }, { "text": "" }
                            ],
                            [
                                { image: box75, width: 17, height: 15, }, { text: 'It was a requirement of my job', style: "textSmall" },
                                { image: box79, width: 17, height: 15, }, { text: 'I wanted extra skills for my job', style: "textSmall" },
                                { text: '', style: "textSmall" }, { text: '', style: "textSmall" },
                            ],
                            [
                                { image: box81, width: 17, height: 15, }, { text: 'To get a better job or promotion', style: "textSmall" },
                                { image: box82, width: 17, height: 15, }, { text: 'To get into another course or study', style: "textSmall" },
                                { text: '', style: "textSmall" }, { text: '', style: "textSmall" },
                            ],
                            [
                                { image: box76, width: 17, height: 15, }, { text: 'For personal interest or self-development', style: "textSmall" },
                                { image: box80, width: 17, height: 15, }, { text: 'Other reason', style: "textSmall" },
                                { text: '', style: "textSmall" }, { text: '', style: "textSmall" },
                            ],

                        ]
                    },
                    layout: {
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    }
                },



                //***************************************6th PAGE COMPLETED********************************* 
                '\n',
                {
                    table: {
                        widths: [500],
                        body: [
                            [
                                {
                                    text: 'IDENTIFICATION', fillColor: "#484848", color: 'white', bold: true, style: "textSmall",
                                    border: [true, true, true, true]
                                },
                            ],
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 2; },
                        paddingBottom: function (i, node) { return 2; },
                        hLineColor: '#4f6228',
                        vLineColor: '#4f6228',
                    }
                },
                "\n",
                {
                    style: 'tableExample',
                    table: {
                        widths: [5, 200, 5, 200],
                        body: [
                            [
                                { image: box83, width: 17, height: 15, alignment: 'center' }, { text: 'Drivers licence', style: "textSmall" },
                                { image: box87, width: 17, height: 15, alignment: 'center' }, { text: 'Birth certification', style: "textSmall" },
                            ],
                            [
                                { image: box84, width: 17, height: 15, alignment: 'center' }, { text: 'Passport', style: "textSmall" },
                                { image: box88, width: 17, height: 15, alignment: 'center' }, { text: 'Medicare card', style: "textSmall" },
                            ],
                            [
                                { image: box85, width: 17, height: 15, alignment: 'center' }, { text: 'Proof of age card', style: "textSmall" },
                                { image: box89, width: 17, height: 15, alignment: 'center' }, { text: 'Health Care card', style: "textSmall" },
                            ],
                            [
                                { image: box86, width: 17, height: 15, alignment: 'center' }, { text: 'Learners Permit', style: "textSmall" },
                                { image: box90, width: 17, height: 15, alignment: 'center' }, { text: 'Credit card', style: "textSmall" },
                            ],
                        ]
                    },
                    layout: {
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    },
                },
                '\n',
                {
                    pageBreak: 'before',
                    table: {
                        widths: [500],
                        body: [
                            [
                                {
                                    text: 'TUITION FEES', fillColor: "#484848", color: 'white', bold: true, style: "textSmall",
                                    border: [true, true, true, true]
                                },
                            ],
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 2; },
                        paddingBottom: function (i, node) { return 2; },
                        hLineColor: '#4f6228',
                        vLineColor: '#4f6228',
                    }
                },
                "\n",
                {
                    text: 'Fee Concession or Fee Waivers', bold: true, style: "textSmall",
                },
                "\n",
                {
                    text: 'Fee Concession or Fee Waivers', style: "textSmall",
                },
                "\n",
                {
                    table: {
                        widths: [4, 100, 4, 100],
                        body: [
                            [
                                { image: box91, width: 17, height: 15, alignment: 'center' }, { text: 'Yes', style: "textSmall", bold: true },
                                { image: box92, width: 17, height: 15, alignment: 'center' }, { text: 'No', style: "textSmall", bold: true },
                            ],
                        ]
                    },
                    layout: {
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    },

                },
                "\n",
                {
                    text: 'If yes which of the following has been sighted?', style: "textSmall",
                    bold: true
                }
                ,
                {
                    style: 'tableExample',
                    table: {
                        widths: [5, 400],
                        body: [
                            [
                                { image: box93, width: 17, height: 15, alignment: 'center' }, { text: 'Health Care Card issued by the commonwealth', style: "textSmall" },

                            ],
                            [
                                { image: box94, width: 17, height: 15, alignment: 'center' }, { text: 'Pensioner Concession Card; or', style: "textSmall" },

                            ],
                            [
                                { image: box95, width: 17, height: 15, alignment: 'center' }, { text: 'Veteran’s Gold Card; or', style: "textSmall" },

                            ],
                            [
                                { image: box96, width: 17, height: 15, alignment: 'center' }, { text: 'An alternative card or concession eligibility criterion approved by the Minister for the Purpose of these Guidelines', style: "textSmall" },

                            ],
                        ]
                    },
                    layout: {
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    },

                },
                {
                    style: "textSmall",
                    text: 'NB: Optimistic Futures must retain a copy of the relevant concession card specified clauses 3.7 of these GuidelinesWhere the concession card is present via digital wallet through Centrelink Express Plus mobile application, optimistic futures must make a written declaration and attach it to the student file stating, the following;', style: 'textSmall'
                },
                {
                    style: "textSmall",
                    ul: [
                        'It’s a digital concession card with clause 3.7;',
                        'Name of the authorised delegate who sighted the digital concession card;',
                        'Date the digital concession was sighted;',
                        'Document number of the concession card; and',
                        'Name of the concession holder.',
                    ]
                },
                "\n",
                {
                    text:
                        [

                            { text: 'Have you been referred by Job Seekers with a standard Job Seeker Referral Form? ', style: "textSmall" },
                            { text: '(Please Tick One)', style: "textSmall", color: "grey" }
                        ],
                    style: 'textSmall'
                },
                {

                    table: {
                        widths: [4.5, 15, 120, 10, 50],
                        body: [
                            [
                                { image: box152, width: 17, height: 15, alignment: 'center', border: [false, false, false, false] }, { text: 'Yes', style: "textSmall", border: [false, false, false, false] },
                                { text: thirtySeven, style: "textSmall", border: [false, false, false, true] },
                                { image: box153, width: 17, height: 15, alignment: 'center', border: [false, false, false, false] }, { text: 'No', style: "textSmall", border: [false, false, false, false] },
                            ],
                            [
                                { text: '', style: "textSmall", border: [false, false, false, false] }, { text: '', style: "textSmall", border: [false, false, false, false] },
                                { text: '(Please Specify)', fontSize: 8, alignment: "center", border: [false, false, false, false], color: "grey" },
                                { text: '', style: "textSmall", border: [false, false, false, false] }, { text: '', style: "textSmall", border: [false, false, false, false] },
                            ]
                        ]
                    },
                },
                "\n",
                {
                    text:
                        [

                            { text: 'Are you self-identified as being of Aboriginal or Torres Strait Islander descent under the Indigenous Completion initiative?  ', style: "textSmall" },
                            { text: '\n(Please Tick One)', style: "textSmall", bold: true }
                        ],
                    style: 'textSmall'
                },
                "\n",
                {

                    table: {
                        widths: [4.5, 50, 10, 50],
                        body: [
                            [
                                { image: box97, width: 17, height: 15, alignment: 'center', border: [false, false, false, false] }, { text: 'Yes', style: "textSmall", border: [false, false, false, false] },
                                { image: box98, width: 17, height: 15, alignment: 'center', border: [false, false, false, false] }, { text: 'No', style: "textSmall", border: [false, false, false, false] },
                            ],
                        ]
                    },
                },



                //***************************************7th PAGE COMPLETED********************************* 
                '\n',
                {
                    table: {
                        widths: [500],
                        body: [
                            [
                                {
                                    text: 'PAYMENT METHOD', fillColor: "#484848", color: 'white', bold: true, style: "textSmall",
                                    border: [true, true, true, true]
                                },
                            ],
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 1; },
                        paddingBottom: function (i, node) { return 1; },
                        hLineColor: '#4f6228',
                        vLineColor: '#4f6228',
                    }
                },
                "\n",
                {
                    text: "Please make payable to: Optimistic Futures Pty Ltd",
                    style: "textSmall", bold: true
                },
                "\n",
                {
                    table: {
                        widths: [4.5, 105, 4.5, 105, 4.5, 105, 4.5, 105],
                        body: [

                            [
                                { image: box99, width: 17, height: 15, alignment: 'center', style: "textSmall" }, { text: 'Cheque', style: "textSmall", bold: "true" },
                                { image: box100, width: 17, height: 15, alignment: 'center', style: "textSmall" }, { text: 'Bank cheque', style: "textSmall", bold: "true" },
                                { image: box101, width: 17, height: 15, alignment: 'center', style: "textSmall" }, { text: 'Money order', style: "textSmall", bold: "true" },
                                { image: box102, width: 17, height: 15, alignment: 'center', style: "textSmall" }, { text: 'EFTPOS', style: "textSmall", bold: "true" }

                            ],

                        ]
                    },
                    layout: {
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    }
                },
                {
                    table: {
                        widths: [4.5, 405],
                        body: [

                            [
                                { image: box103, width: 17, height: 15, alignment: 'center', style: "textSmall" }, { text: 'Cash – Do not send cash, to make a cash payment please pay at the front desk', style: "textSmall", bold: "true" },

                            ],
                            [
                                { image: box104, width: 17, height: 15, alignment: 'center', style: "textSmall" }, { text: 'Funded from Skills First Program', style: "textSmall", bold: "true" },

                            ],
                        ]
                    },
                    layout: {
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    }
                },
                '\n',
                {
                    table: {
                        widths: [500],
                        body: [
                            [
                                {
                                    text: 'REFUNDS', fillColor: "#484848", color: 'white', bold: true, style: "textSmall",
                                    border: [true, true, true, true]
                                },
                            ],
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 1; },
                        paddingBottom: function (i, node) { return 1; },
                        hLineColor: '#4f6228',
                        vLineColor: '#4f6228',
                    }
                },
                {
                    text: 'Deposits are non-refundable (deposits are outlined on each course flyer) but can be transferred to another course or student. \nAn administration fee of $150 will be charged to any student who withdraws from a course in excess of 3 working days prior to course commencement.\nNo refunds will be issued once the course has commenced\n\n',
                    bold: true, style: "textSmall",

                },
                {
                    text: 'Refunds may be made in the following circumstances:',
                    bold: true, style: "textSmall",
                },
                {
                    margin: [10, 2, 0, 0],
                    ul: [
                        {
                            text: 'Participants have overpaid the administration charge',
                            bold: true, style: "textSmall",

                        },
                        {
                            text: 'Participants enrolled in training that has been cancelled by the RTO',
                            bold: true, style: "textSmall",

                        },
                        {
                            text: 'Participant advises the RTO prior to course commencement that they are withdrawing from the course',
                            bold: true, style: "textSmall",

                        },
                        {
                            text: 'If the participant withdraws from a course or program due to illness or extreme hardship as determined by the RTO',
                            bold: true, style: "textSmall",

                        },
                    ]
                },
                //***************************************8th PAGE COMPLETED********************************* 

                {
                    pageBreak: "before",
                    table: {
                        widths: [100, 400],
                        body: [
                            [
                                {
                                    image: img,
                                    width: 150,
                                    height: 65,
                                    alignment: 'center'
                                },
                                {
                                    text: 'SKILLS FIRST PROGRAM \nENROLMENT AGREEMENT FORM', fontSize: 25, bold: true, alignment: "center", style: "text", margin: [0, 20, 0, 0]
                                },
                            ],
                            [
                                {
                                    style: 'paragraph',
                                    text: ""
                                },
                                {
                                    margin: [90, 0, 0, 0],
                                    style: 'paragraph',
                                    text: "OPTIMISTIC FUTURES TOID: 41053",
                                    bold: true
                                }
                            ]
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 0; },
                        paddingBottom: function (i, node) { return 0; },
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    }
                },
                '\n',
                {
                    table: {
                        widths: [500],
                        body: [
                            [
                                {
                                    text: 'TERMS & CONDITIONS OF ENROLMENT', fillColor: "#484848", color: 'white', bold: true, style: "textSmall",
                                    border: [true, true, true, true]
                                },
                            ],
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 2; },
                        paddingBottom: function (i, node) { return 2; },
                        hLineColor: '#4f6228',
                        vLineColor: '#4f6228',
                    }
                },
                "\n",
                {
                    alignment: 'justify',
                    style: "column",
                    columns: [
                        [
                            { text: 'Enrolment & Selection (5.3)\n', bold: true },
                            {
                                margin: [7, 3, 10, 0],
                                ol: [
                                    { text: 'Courses are open to all adults 18 years and over.' },
                                    { text: 'The student is responsible for notifying the RTO if they have a medical condition or disability or require assistance in their training.' },
                                    { text: 'deposit must accompany enrolment to secure a placement within a course; this fee is also the Administration Fee.' },
                                    { text: 'It is the studeŶt͛s ƌespoŶsiďility to Ŷote the date, tiŵe aŶd loĐatioŶ of the course as advertised.' },
                                    { text: 'Courses with low enrolments may be cancelled, every effort will be made to contact students, please ensure your contact details are correct.' },
                                    { text: 'Requests from the student to transfer or credit their course placement due to changed personal circumstances will be considered and every effort will be made to ensure a placement into an alternative course.' },
                                    { text: 'If you are unable to complete your course, due to changed personal circumstances, the RTO will make every effort to ensure you are placed into an alternative pre-scheduled course.' },
                                    { text: 'Students can only join after course commencement date if they meet all prerequisites. Full course fees are still payable for late enrolments.' },
                                    { text: "The RTO reserves the right to decline admission to a course, terminate a student's enrolment in a class or change a course or tutor at any time without notice." },
                                    { text: 'Students participate in courses involving physical activity; field trips, practical demonstrations etc. and do so at their own risk. The RTO’s students are covered by public liability insurance whilst working within the RTO’s premises.' },
                                ]
                            },

                            { text: '\nTraining Guarantee (5.3)\n', bold: true },
                            { text: 'The RTO will guarantee to complete all training and/ or assessment once the student has commenced study in their chosen qualification or course of study, unless the student submits a formal Letter of Withdrawal notifying the RTO that they wish to withdraw. If a student voluntarily drops out, this guarantee is valid for a maximum of six months from initial course commencement date.\n', margin: [7, 3, 10, 0], },

                            { text: 'Course Fees, Payments and Refunds (5.3)\n', bold: true },
                            {
                                margin: [7, 3, 10, 0],
                                ol: [
                                    { text: '	Please refer to the course flyer for information on course fees, including any required deposit; administration fees; materials fees and any other charges (if applicable).' },
                                    { text: 'An administration fee of $150 is required to be paid prior to course commencement to secure a place within the course, if the student withdraws from the course at any time, they will forfeit this fee. If the total course fee is less than $150, then the total of the course is to be paid prior to course commencement to secure a place within the course.' },
                                    { text: 'The Administration Fee is non-refundable, but can be transferred to another course or student.' },
                                    { text: 'Certificates and Statements of Attainment are issued to students who are assessed as competent in the units completed. The cost of the certificates is included in the course fees.' },
                                    [{ text: 'Refunds may be made in the following circumstances:' }, {
                                        margin: [7, 3, 10, 0],
                                        type: 'lower-alpha',
                                        ol: [
                                            { text: 'Participants have overpaid the administration charge' },
                                            { text: 'Participants enrolled in training that has been cancelled by the RTO' },
                                            { text: "Participant advises the RTO prior to course commencement that they are withdrawing from the course" },
                                            { text: "d.	If the participant withdraws from a course or program due to illness or extreme hardship as determined by the RTO" }
                                        ]
                                    }],
                                    { text: 'No refunds will be issued once the course has commenced' },
                                    { text: 'Students are responsible for the safe storage of their Certificates and Statements of Attainment. If a student requires a reissue of their Certificate or Statement of Attainment, a certificate re-issue fee of $80 will be charged.' },
                                    { text: "If a student is deemed not yet competent on completion of training, they will be offered an opportunity to be reassessed. If a student is deemed not yet competent a second time, they will be given another opportunity for reassessment." },
                                    { text: "If a student is required to be reassessed, they will be provided with further guidance from their trainer prior to reassessment." },
                                    { text: 'In most cases there will be no reassessment fee. If a reassessment fee is applicable, this fee will be included on the course flyer.' },
                                    { text: 'If a student is deemed competent in some but not all the units of competencies required, a Statement of Attainment will be issued and the student will be given a six-month period to undertake reassessment if required.' },
                                ]
                            },
                            { text: '\nFee Protection (7.3)\n', bold: true },
                            {
                                text: 'The RTO requires a minimum deposit, which will not exceed $1,500 per individual student, prior to course commencement. If the full course fees are below $1,500, the full fees may be required to be paid prior to course commencement. Please refer to the course flyers for deposits and course fees.Following course commencement, full fees will be required to be paid by either a payment plan(if remaining fees are over $1500), or in full(if the remaining fees are below $1500) for tuition and other services yet to be delivered.\n', margin: [7, 3, 10, 0],
                            },
                            { text: '\nPrivacy Notice\n', bold: true },
                            [
                                { text: 'Under the Data Provision Requirements 2012, Optimistic Futures Pty Ltd is required to collect personal information about you and to disclose that personal information to the National Centre for Vocational Education Research Ltd (NCVER). Your personal information (including the personal information contained on this enrolment form and your training activity data) may be used or disclosed by Optimistic Futures Pty Ltd for statistical, regulatory and research purposes. Optimistic Futures Pty Ltd may disclose your personal information for these purposes to third parties, including:\n', margin: [7, 3, 10, 0], }
                                , {
                                    margin: [7, 3, 10, 0],
                                    type: 'lower-alpha',
                                    ul: [
                                        { text: 'School – if you are a secondary student undertaking VET, including a school- based apprenticeship or traineeship;' },
                                        { text: 'Employer – if you are enrolled in training paid by your employer;' },
                                        { text: "Commonwealth and State or Territory government departments and authorised agencies;" },
                                        { text: "NCVER;" },
                                        { text: "Organisations conducting student surveys; and" },
                                        { text: "Researchers." }
                                    ]
                                }
                            ],
                            [
                                { text: 'Personal information disclosed to NCVER may be used or disclosed for the following purposes:\n', margin: [7, 3, 10, 0], }
                                , {
                                    margin: [7, 3, 10, 0],
                                    type: 'lower-alpha',
                                    ul: [
                                        { text: 'Issuing a VET Statement of Attainment or VET Qualification, and populating Authenticated VET Transcripts;' },
                                        { text: 'facilitating statistics and research relating to education, including surveys;' },
                                        { text: "Commonwealth and State or Territory government departments and authorised agencies;" },
                                        { text: "understanding how the VET market operates, for policy, workforce planning and consumerinformation; and" },
                                        { text: "administering VET, including program administration,regulation, monitoring and evaluation. You may receive an NCVER student survey which may be administered by an NCVER employee, agent or third-party contractor. You may opt out of the survey at the time of being contacted. NCVER will collect, hold, use and disclose your personal information in accordance with the Privacy Act 1988 (Cth), the VET Data Policy and all NCVER policies and protocols (including those published on NCVER’s website at www.ncver.edu.au)." },
                                    ]
                                }
                            ],
                        ],
                        [
                            { text: 'Consumer Guarantee (5.3)\n', bold: true },
                            { text: 'The RTO guarantees that the services provided by the RTO will be:\n', },
                            {
                                margin: [7, 3, 10, 0],
                                ul: [
                                    { text: 'provided with due care and skill' },
                                    { text: 'fit for any specified purpose (express or implied)' },
                                    { text: 'Provided within a reasonable time (when no timeframe is set for the training).' },
                                ]
                            },

                            { text: '\nCooling Off Period (5.3)\n', bold: true },
                            { text: 'Students are eligible to cancel their enrolment by placing a formal notice of cancellation in writing to the RTO Manager (a letter or email is acceptable) within 10 business days of enrolment, without attracting a cancellation fee, unless the student has already commenced the training.\n', margin: [7, 3, 10, 0], },

                            { text: '\nComplaints and Appeals (6.1)\n', bold: true },
                            {
                                text: 'If a student, trainer or staff member is experiencing any difficulties, they are encouraged to discuss their concerns with Senior Management. The RTO administrative staff will make themselves available at a mutually convenient time if a student wishes to seek assistance.If a Staff member or Student wishes to make a formal complaint they are required to complete a Complaints and Appeals Form, which is included in the Student Handbook.Once the form has been completed, the form should be submitted to the RTO for actioning.\nPlease refer to the Student Handbook for more details on the complaints and appeals process.\n', margin: [7, 3, 10, 0],
                            },


                            { text: '\nCredit Transfer (3.5)\n', bold: true },
                            {
                                text: 'The RTO recognises the Australian Qualifications Framework and Vocational Education and Training (VET) qualifications and VET statements of attainment issued by any other Registered Training Organisation.Credit Transfer will be awarded for all units of competencies that directly align with units from the qualification the student has enrolled.Evidence of competences achieved must be supplied for recognition to be processed(i.e.presentation of original certificate or transcript).\nPlease refer to the Student Handbook or contact the office for the procedure on how to apply for a Credit Transfer.\n', margin: [7, 3, 10, 0],
                            },


                            { text: '\nLanguage, Literacy and Numeracy (LLN) (1.7)\n', bold: true },
                            {
                                text: 'LLN support is available to provide students with advice and support  services in the provision of language, literacy and numeracy assessment services. Students needing assistance with their learning should be  identified upon enrolment. Trainers and staff within the RTO can provide students with support to assist the student throughout the learning process.Language, Literacy and Numeracy skills are generally included and identified in Training Packages and accredited course programs.In identifying language, literacy and numeracy requirements, students are required to have basic skills in:\n', margin: [7, 3, 10, 0],
                            },
                            {
                                margin: [7, 3, 10, 0],
                                ul: [
                                    { text: 'Count, check and record accurately\n', bold: true },
                                    { text: 'Read and interpret\n', bold: true },
                                    { text: 'Estimate, calculate and measure\n', bold: true },
                                ]
                            },
                            {
                                text: 'All students undertaking a Certificate III qualification or below are required to undertake an LLN Assessment.', margin: [7, 3, 10, 0],
                            },


                            { text: '\nSupport Services (1.7)\n', bold: true },
                            {
                                text: 'The RTO caters to diverse client learning needs and aims to identify and respond to the learning needs of all clients.  Clients are encouraged to express their views about their learning needs at all stages of their learning experience from the initial enrolment and induction stage.The RTO will analyse who the target candidates are and whether an individual, a specific group or a broad target group and will determine the key characteristics and needs of candidates, including disabilities.\n\n\n\nThe RTO is committed to providing clients requiring additional support, advice or assistance while training.  To achieve this and to ensure the quality delivery of training and education, the RTO provides client vocational counselling to improve and extend training outcomes. Students are advised to make an appointment with their trainer in the first instance, if required the student can then schedule an appointment with the RTO for further counselling.\n', margin: [7, 3, 10, 0],
                            },


                            { text: '\nLegislative and Regulatory Requirements (8.5)\n', bold: true },
                            {
                                text: 'All students will undergo an induction with the RTO, which will include the student’s rights and responsibilities against the relevant Commonwealth, State or Territory legislation and regulatory requirements. Students are issued with a Student Handbook, which also includes the Student’s rights and responsibilities that will affect their participation in vocational education and training. The student acknowledges that they must observe The RTO’s policies and procedures, according to State and Federal Government legislative and regulatory requirements, as set out in the Student Handbook.\n', margin: [7, 3, 10, 0],
                            },


                            { text: '\nNCVER Survey:\n', bold: true },
                            {
                                text: 'National Centre of Vocational Education Research may in the duration of your studies contact you to participate in a survey which may include the following: An invitation to participate in a Department endorsed project: An invitation to participate in the Department’s annual student outcome survey: Contacted by the Department (or persons authorised by the Department) for audit, review or investigation purposes.\n', margin: [7, 3, 10, 0],
                            },

                        ]
                    ]
                },
                '\n',
                {
                    pageBreak: 'before',
                    table: {
                        widths: [500],
                        body: [
                            [
                                {
                                    text: 'Student Declaration and Consent', fillColor: "#484848", color: 'white', alignment: 'center', fontSize: 14, bold: true, style: "textSmall",
                                    border: [true, true, true, true]
                                },
                            ],
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 2; },
                        paddingBottom: function (i, node) { return 2; },
                        hLineColor: '#4f6228',
                        vLineColor: '#4f6228',
                    }
                },
                {

                    table: {
                        widths: [350, 4.5, 70, 4.5, 15, 130],
                        dontBreakRows: true,
                        body: [
                            [
                                { text: 'Do you give consent to OPTIMISTIC FUTURES to display your testimonials on their website?', style: "textSmall", border: [false, false, false, false] },
                                { image: box105, width: 17, height: 15, alignment: 'left', border: [false, false, false, false] }, { text: 'Yes', style: "textSmall", border: [false, false, false, false] },
                                { image: box106, width: 17, height: 15, alignment: 'left', border: [false, false, false, false] }, { text: 'No', style: "textSmall", border: [false, false, false, false] },
                                { text: '', style: "textSmall", border: [false, false, false, false] },
                            ],
                            [
                                { text: 'Do you give consent to OPTIMISTIC FUTURES to use your photo on their website or/and on their marketing material?', style: "textSmall", border: [false, false, false, false] },
                                { image: box107, width: 17, height: 15, alignment: 'left', border: [false, false, false, false] }, { text: 'Yes', style: "textSmall", border: [false, false, false, false] },
                                { image: box109, width: 17, height: 15, alignment: 'left', border: [false, false, false, false] }, { text: 'No', style: "textSmall", border: [false, false, false, false] },
                                { text: '', style: "textSmall", border: [false, false, false, false] },
                            ],

                        ]
                    },
                },
                {
                    text: '\nI I have read and understand the terms and conditions of my enrolment, as stated above. I acknowledge and agree with the terms and conditions of enrolment with specific reference to the RTO’s enrolment and selection, USI, course fees, payments and refunds, course requirements, Language Literacy and Numeracy requirements, complaints and appeals, Workplace Health and Safety, support services that will be provided for me, legislative and regulatory policies and procedures, which are also provided to me in the Student Handbook. By signing this document, I also give permission for the RTO to access my Unique Student Identifier for the purpose of my training.', style: "column",
                },
                "\n",
                {
                    table: {
                        style: "paragraph",
                        widths: [95, 230, 30, 100],
                        body: [

                            [
                                {
                                    text: 'STUDENT SIGNATURE:  ', bold: true,
                                    style: "textSmall",
                                    border: [false, false, false, false]
                                },
                                {
                                    text: "",
                                    style: "textSmall",
                                    border: [false, false, false, true]
                                },
                                {
                                    text: 'Date:',
                                    style: 'textSmall',
                                    bold: true,
                                    border: [false, false, false, false]
                                },
                                {
                                    text: "",
                                    style: "textSmall",
                                    border: [false, false, false, true]
                                },
                            ],
                        ]
                    },
                },
                "\n",
                {
                    table: {
                        style: "paragraph",
                        widths: [150, 195, 30, 100],
                        body: [

                            [
                                {
                                    text: 'PARENT/GUARDIAN SIGNATURE*:', bold: true,
                                    style: "textSmall",
                                    border: [false, false, false, false]
                                },
                                {
                                    text: "",
                                    style: "textSmall",
                                    border: [false, false, false, true]
                                },
                                {
                                    text: 'Date:',
                                    style: 'textSmall',
                                    bold: true,
                                    border: [false, false, false, false]
                                },
                                {
                                    text: "",
                                    style: "textSmall",
                                    border: [false, false, false, true]
                                },
                            ],
                            [
                                {
                                    text: '*Parental/guardian consent is required for all students under the age of 18.', style: "textSmall", bold: true, colSpan: 3,
                                    border: [false, false, false, false]
                                },
                                {
                                    text: "",

                                    border: [false, false, false, false]
                                },
                                {
                                    text: '',
                                    bold: true,
                                    border: [false, false, false, false]
                                },
                                {
                                    text: '',
                                    border: [false, false, false, false]
                                },
                            ],
                        ]
                    },
                },
                "\n",
                {
                    table: {
                        style: "paragraph",
                        widths: [95, 230, 30, 100],
                        body: [
                            [
                                {
                                    text: 'RTO REPRESENTATIVE:  ', bold: true,
                                    style: "textSmall",
                                    border: [false, false, false, false]
                                },
                                {
                                    text: "",
                                    style: 'textSmall',
                                    border: [false, false, false, true]
                                },
                                {
                                    text: 'Date:',
                                    style: 'textSmall',
                                    bold: true,
                                    border: [false, false, false, false]
                                },
                                {
                                    text: "",
                                    style: "textSmall",
                                    border: [false, false, false, true]
                                },
                            ],
                        ]
                    },
                },

                // Page 11 ********************************************************

                {
                    pageBreak: "before",
                    table: {
                        style: "paragraph",
                        widths: [500, 500,],
                        body: [
                            [
                                {
                                    text: 'EVIDENCE OF STUDENT ELIGIBILTY AND STUDENT DECLARATION\n\n',
                                    bold: true,
                                    fontSize: 12,
                                    alignment: 'center',
                                    border: [false, false, false, false]
                                },

                            ],
                            [
                                {

                                    text:
                                        [
                                            { text: "Section A", bold: true }, ' - To be completed by an authorised delegate of the Optimistic Futures'
                                        ],
                                    fontSize: 12,
                                    border: [false, false, false, false]
                                },

                            ],
                        ]
                    },
                },
                {
                    border: [true, true, false, false],
                    table: {
                        style: "paragraph",
                        body: [
                            [
                                {
                                    text: 'EVIDENCE OF STUDENT ELIGIBILTY AND STUDENT DECLARATION\n\n',
                                    bold: true,
                                    fontSize: 11,
                                    border: [true, true, true, false]
                                },
                            ],
                            [
                                {

                                    border: [true, false, true, false],
                                    table: {
                                        style: "paragraph",
                                        widths: [120, 370],
                                        body: [
                                            [
                                                {
                                                    text: 'I confirm that in relation to',
                                                    style: "textSmall",
                                                    border: [false, false, false, false]
                                                },
                                                {
                                                    text: fortyTwo,
                                                    style: "textSmall",
                                                    border: [false, false, false, true]
                                                },

                                            ],
                                        ]
                                    },
                                },
                            ],
                            [
                                {

                                    border: [true, false, true, false],
                                    table: {
                                        widths: [120, 370],
                                        body: [
                                            [
                                                {
                                                    text: '',
                                                    border: [false, false, false, false]
                                                },
                                                {
                                                    text: "Student's full Name",
                                                    border: [false, false, false, false],
                                                    fontSize: 8,
                                                    color: "grey",
                                                    alignment: 'center'
                                                },

                                            ],
                                        ]
                                    },
                                },
                            ],
                            [
                                {

                                    border: [true, false, true, false],
                                    table: {
                                        widths: [495],
                                        body: [
                                            [
                                                {
                                                    style: "textSmall",
                                                    text: 'I have sighted: an original; or a certified copy; or an uncertified copy that I have verified through use of a document verification service of one of the following:',
                                                    border: [false, false, false, false]
                                                },
                                            ],
                                        ]
                                    },
                                },
                            ]
                            ,
                            [
                                {

                                    border: [true, false, true, false],
                                    table: {
                                        widths: [495],
                                        body: [
                                            [
                                                {
                                                    style: 'tableExample',
                                                    border: [false, false, false, false],
                                                    table: {
                                                        widths: [5, 200, 5, 200],
                                                        body: [
                                                            [
                                                                { image: IconBlank, width: 17, height: 15, alignment: 'center' }, { text: 'an Australian Birth Certificate (not Birth Extract)', style: "textSmall" },
                                                                { image: IconBlank, width: 17, height: 15, alignment: 'center' }, { text: 'a current Australian Passport', style: "textSmall" },
                                                            ],
                                                            [
                                                                { image: IconBlank, width: 17, height: 15, alignment: 'center' }, { text: 'a current New Zealand Passport', style: "textSmall" },
                                                                { image: IconBlank, width: 17, height: 15, alignment: 'center' }, { text: 'a naturalisation certificate', style: "textSmall" },
                                                            ],
                                                            [
                                                                { image: IconBlank, width: 17, height: 15, alignment: 'center' }, { text: 'a current green Medicare Card', style: "textSmall" },
                                                                { image: IconBlank, width: 17, height: 15, alignment: 'center' }, { text: 'a proxy declaration for individuals in exceptional circumstances as per Clauses 3.15 – 3.19 of these Guidelines', style: "textSmall" },
                                                            ],
                                                            [
                                                                { image: IconBlank, width: 17, height: 15, alignment: 'center' }, { text: 'formal documentation issued by the Australian Department of Immigration and Border Protection confirming permanent residence', style: "textSmall" },
                                                                { image: IconBlank, width: 17, height: 15, alignment: 'center' }, { text: 'an Australian citizenship by decent extract', style: "textSmall" },
                                                            ],
                                                            [
                                                                { text: "OR if the individual is undertaking training under Asylum Seeker VET Program and meets the requirements set out in Clause 17 of Schedule 1 of the VET Funding Contract, I have sighted:", colSpan: 4, style: "textSmall" },
                                                                { text: '' },
                                                                { text: "" }, { text: '' },
                                                            ],
                                                            [
                                                                { image: IconBlank, width: 17, height: 15, alignment: 'center' }, { text: 'formal documentation issued by the Australian Department of Immigration and Border Protection confirming permanent residence', colSpan: 3, style: "textSmall" },
                                                                { text: "" }, { text: '' },
                                                            ],
                                                            [
                                                                { image: IconBlank, width: 17, height: 15, alignment: 'center' }, { text: 'For TAFE and Institutes and Learn Locals organisations only, an electronic or printed record demonstrating that the student holds a current valid Bridging Visa Class E (BVE), Safe Haven Enterprise Visa (SHEV) or Temporary Protection Visa (TPV) as verified via the Commonwealth’s Visa Entitlement Verification Online (VEVO).', colSpan: 3, style: "textSmall" },
                                                                { text: "" }, { text: '' },
                                                            ],

                                                        ]
                                                    },
                                                    layout: {
                                                        hLineColor: '#fff',
                                                        vLineColor: '#fff',
                                                        hLineColor: '#fff',
                                                        vLineColor: '#fff',
                                                    },

                                                },
                                            ],
                                        ]
                                    },
                                },
                            ],

                            [
                                {

                                    border: [true, false, true, false],
                                    table: {
                                        widths: [495],
                                        body: [
                                            [
                                                {
                                                    border: [false, false, false, false],
                                                    table: {
                                                        widths: [5, 400],
                                                        body: [
                                                            [
                                                                { text: '', style: "textSmall" }, { text: 'AND I have retained:', style: "textSmall", bold: true },

                                                            ],
                                                            [
                                                                { image: IconBlank, width: 17, height: 15, alignment: 'center' }, { text: 'a copy of the original or certified copy, or', style: "textSmall" },

                                                            ],
                                                            [
                                                                { image: IconBlank, width: 17, height: 15, alignment: 'center' }, { text: 'the certified copy, or', style: "textSmall" },

                                                            ],
                                                            [
                                                                { image: IconBlank, width: 17, height: 15, alignment: 'center' }, { text: 'secure login access to the administrative function of document verification service whereby a record can be viewed or extracted that confirms that the individual’s name and date of birth were verified to match valid document number;', style: "textSmall" },

                                                            ],
                                                        ]
                                                    },
                                                    layout: {
                                                        hLineColor: '#fff',
                                                        vLineColor: '#fff',
                                                        hLineColor: '#fff',
                                                        vLineColor: '#fff',
                                                    },

                                                },
                                            ],
                                        ]
                                    },
                                },
                            ],
                            [
                                {

                                    border: [true, false, true, false],
                                    table: {
                                        widths: [495],
                                        body: [
                                            [
                                                {
                                                    border: [false, false, false, false],
                                                    table: {
                                                        widths: [5, 400],
                                                        body: [
                                                            [
                                                                { text: 'AND If the student’s age is relevant to their eligibility and the document produced from the list above does not include a date of birth:', colSpan: 2, style: "textSmall" }, { text: '', style: "textSmall", bold: true },

                                                            ],
                                                            [
                                                                { image: IconBlank, width: 17, height: 15, alignment: 'center' }, { text: 'a current drivers licence, or', style: "textSmall" },

                                                            ],
                                                            [
                                                                { image: IconBlank, width: 17, height: 15, alignment: 'center' }, { text: 'a current learner permit, or', style: "textSmall" },

                                                            ],
                                                            [
                                                                { image: IconBlank, width: 17, height: 15, alignment: 'center' }, { text: 'a Proof of Age card, or', style: "textSmall" },

                                                            ],
                                                            [
                                                                { image: IconBlank, width: 17, height: 15, alignment: 'center' }, { text: 'A ‘KEYPASS’ CARD', style: "textSmall" },

                                                            ],
                                                        ]
                                                    },
                                                    layout: {
                                                        hLineColor: '#fff',
                                                        vLineColor: '#fff',
                                                        hLineColor: '#fff',
                                                        vLineColor: '#fff',
                                                    },

                                                },
                                            ],
                                        ]
                                    },
                                },
                            ]
                            ,
                            [
                                {

                                    border: [true, false, true, true],
                                    table: {
                                        widths: [495],
                                        body: [
                                            [
                                                {
                                                    border: [false, false, false, false],
                                                    table: {
                                                        widths: [10, 400],
                                                        body: [
                                                            [
                                                                { text: '', style: "textSmall" }, { text: 'NB: Optimistic Futures must retain a copy of all documentation used in Section A, as per section 2 of these Guidelines.', fontSize: 6, style: "textSmall", color: 'grey' },

                                                            ]
                                                        ]
                                                    },
                                                    layout: {
                                                        hLineColor: '#fff',
                                                        vLineColor: '#fff',
                                                        hLineColor: '#fff',
                                                        vLineColor: '#fff',
                                                    },

                                                },
                                            ],
                                        ]
                                    },
                                },
                            ]








                        ],

                    },
                },




                // page 12 *****************************************************************************



                {
                    pageBreak: "before",
                    table: {
                        style: "paragraph",
                        widths: [500, 500,],
                        body: [
                            [
                                {

                                    text:
                                        [
                                            { text: "Section B", bold: true }, ' - To be completed by the student'
                                        ],
                                    fontSize: 12,
                                    border: [false, false, false, false]
                                },

                            ],
                        ]
                    },
                },
                {
                    border: [true, true, false, false],
                    table: {
                        style: "paragraph",
                        body: [
                            [
                                {
                                    text: 'Education history\n\n',
                                    bold: true,
                                    fontSize: 11,
                                    border: [true, true, true, false]
                                },
                            ],
                            [
                                {

                                    border: [true, false, true, false],
                                    table: {
                                        style: "paragraph",
                                        widths: [370, 120],
                                        body: [
                                            [
                                                {
                                                    text: 'Q1. The highest qualification I have completed OR will have completed at the time the training that I am seeking to enrol in is scheduled to start is:',
                                                    colSpan: 2,
                                                    style: "textSmall",
                                                    border: [false, false, false, false]
                                                },
                                                {
                                                    text: '',
                                                    border: [false, false, false, false]
                                                },

                                            ],
                                        ]
                                    },
                                },
                            ],
                            [
                                {

                                    border: [true, false, true, false],
                                    table: {
                                        style: "paragraph",
                                        widths: [120, 300],
                                        body: [
                                            [
                                                {
                                                    text: fortyFour,
                                                    style: "textSmall",
                                                    border: [false, false, false, true]
                                                },
                                                {
                                                    text: '',
                                                    border: [false, false, false, true]
                                                },

                                            ],
                                        ]
                                    },
                                },
                            ],
                            [
                                {

                                    border: [true, false, true, false],
                                    table: {
                                        widths: [120, 370],
                                        body: [
                                            [
                                                {
                                                    text: '',
                                                    border: [false, false, false, false]
                                                },
                                                {
                                                    text: '(Include full title of qualification, e.g. Certificate III in Aged Care)',
                                                    border: [false, false, false, false],
                                                    fontSize: 8,
                                                    color: "grey",
                                                    alignment: 'center'
                                                },

                                            ],
                                        ]
                                    },
                                },
                            ],
                            [
                                {

                                    border: [true, false, true, false],
                                    table: {
                                        style: "paragraph",
                                        widths: [495],
                                        body: [
                                            [
                                                {
                                                    text: 'Q2. Not including the course/s you are seeking to enrol in now, how many other government funded courses have you enrolled to undertake this year? Include training you have enrolled in to undertake at this and other training providers but not yet started.',
                                                    style: "textSmall",
                                                    border: [false, false, false, false]
                                                },

                                            ],
                                        ]
                                    },
                                },
                            ],
                            [
                                {

                                    border: [true, false, true, false],
                                    table: {
                                        style: "paragraph",
                                        widths: [60, 60, 60, 60, 25, 100],
                                        body: [
                                            [
                                                {
                                                    text: one2,
                                                    style: "textSmall",
                                                    border: [false, false, false, true]
                                                },
                                                {
                                                    text: two2,
                                                    style: "textSmall",
                                                    border: [false, false, false, true]
                                                },
                                                {
                                                    text: three2,
                                                    style: "textSmall",
                                                    border: [false, false, false, true]
                                                },
                                                {
                                                    text: four2,
                                                    style: "textSmall",
                                                    border: [false, false, false, true]
                                                },
                                                {
                                                    text: five2,
                                                    style: "textSmall",
                                                    border: [false, false, false, true]
                                                },
                                                {
                                                    text: '(circle number)',
                                                    style: "textSmall",
                                                    border: [false, false, false, false]
                                                },

                                            ],
                                        ]
                                    },
                                },
                            ],
                            [
                                {

                                    border: [true, false, true, false],
                                    table: {
                                        style: "paragraph",
                                        widths: [495],
                                        body: [
                                            [
                                                {
                                                    text: 'Q3. Not including the course/s you are seeking to enrol in now, how many other government funded courses are you undertaking training in at the moment ?',
                                                    style: "textSmall",
                                                    border: [false, false, false, false]
                                                },

                                            ],
                                        ]
                                    },
                                },
                            ],
                            [
                                {

                                    border: [true, false, true, false],
                                    table: {
                                        style: "paragraph",
                                        widths: [60, 60, 60, 60, 25, 100],
                                        body: [
                                            [
                                                {
                                                    text: one3,
                                                    style: "textSmall",
                                                    border: [false, false, false, true]
                                                },
                                                {
                                                    text: two3,
                                                    style: "textSmall",
                                                    border: [false, false, false, true]
                                                },
                                                {
                                                    text: three3,
                                                    style: "textSmall",
                                                    border: [false, false, false, true]
                                                },
                                                {
                                                    text: four3,
                                                    style: "textSmall",
                                                    border: [false, false, false, true]
                                                },
                                                {
                                                    text: five3,
                                                    style: "textSmall",
                                                    border: [false, false, false, true]
                                                },
                                                {
                                                    text: '(circle number)',
                                                    style: "textSmall",
                                                    border: [false, false, false, false]
                                                },

                                            ],
                                        ]
                                    },
                                },
                            ],
                            [
                                {

                                    border: [true, false, true, false],
                                    table: {
                                        style: "paragraph",
                                        widths: [495],
                                        body: [
                                            [
                                                {
                                                    text: 'Q4. In your lifetime, how many government funded courses have you started (commenced) that are at the same level as the one you are applying for now? Don’t answer this question if you are seeking to enrol in a course on the Foundation Skills List.',
                                                    style: "textSmall",
                                                    border: [false, false, false, false]
                                                },

                                            ],
                                        ]
                                    },
                                },
                            ],
                            [
                                {

                                    border: [true, false, true, true],
                                    table: {
                                        style: "paragraph",
                                        widths: [60, 60, 60, 60, 25, 100],
                                        body: [
                                            [
                                                {
                                                    text: one4,
                                                    style: "textSmall",
                                                    border: [false, false, false, true]
                                                },
                                                {
                                                    text: two4,
                                                    style: "textSmall",
                                                    border: [false, false, false, true]
                                                },
                                                {
                                                    text: three4,
                                                    style: "textSmall",
                                                    border: [false, false, false, true]
                                                },
                                                {
                                                    text: four4,
                                                    style: "textSmall",
                                                    border: [false, false, false, true]
                                                },
                                                {
                                                    text: five4,
                                                    style: "textSmall",
                                                    border: [false, false, false, true]
                                                },
                                                {
                                                    text: '(circle number)',
                                                    style: "textSmall",
                                                    border: [false, false, false, false]
                                                },

                                            ],

                                        ]
                                    },
                                },
                            ],
                            // Question 5
                            [
                                {

                                    border: [true, false, true, false],
                                    table: {
                                        style: "paragraph",
                                        widths: [495],
                                        body: [
                                            [
                                                {
                                                    text: 'Q5 (FOR TAFE/DUAL SECTOR ENROLMENT ONLY) If you are seeking to enrol in a course on the ‘Free TAFE for Priority Courses List’ at a TAFE or Dual Sector University, have you previously commenced a course on the ‘Free TAFE for Priority Courses List’ and received a fee waiver/exemption for that course?',
                                                    style: "textSmall",
                                                    border: [false, false, false, false]
                                                },

                                            ],
                                        ]
                                    },
                                },
                            ],
                            [
                                {

                                    border: [true, false, true, true],
                                    table: {
                                        style: "paragraph",
                                        widths: [60, 60, 60, 60, 15, 100],
                                        body: [
                                            [
                                                {
                                                    text: 'Yes',
                                                    style: "textSmall",
                                                    border: [false, false, false, true]
                                                },
                                                {
                                                    text: '',
                                                    style: "textSmall",
                                                    border: [false, false, false, true]
                                                },
                                                {
                                                    text: '',
                                                    style: "textSmall",
                                                    border: [false, false, false, true]
                                                },
                                                {
                                                    text: '',
                                                    style: "textSmall",
                                                    border: [false, false, false, true]
                                                },
                                                {
                                                    text: 'No',
                                                    style: "textSmall",
                                                    border: [false, false, false, true]
                                                },
                                                {
                                                    text: '(circle answer)',
                                                    style: "textSmall",
                                                    border: [false, false, false, false]
                                                },

                                            ],

                                        ]
                                    },
                                },
                            ],
                            // Question 5 end

                            // Question 6 
                            // Question 5
                            [
                                {

                                    border: [true, false, true, false],
                                    table: {
                                        style: "paragraph",
                                        widths: [495],
                                        body: [
                                            [
                                                {
                                                    text: 'Q6 (FOR TAFE/DUAL SECTOR ENROLMENT ONLY) If your response to question 5 is ‘YES’, are you seeking to recommence the same course for which you previously received a fee/waiver exemption?',
                                                    style: "textSmall",
                                                    border: [false, false, false, false]
                                                },

                                            ],
                                        ]
                                    },
                                },
                            ],
                            [
                                {

                                    border: [true, false, true, true],
                                    table: {
                                        style: "paragraph",
                                        widths: [60, 60, 60, 60, 15, 100],
                                        body: [
                                            [
                                                {
                                                    text: 'Yes',
                                                    style: "textSmall",
                                                    border: [false, false, false, true]
                                                },
                                                {
                                                    text: '',
                                                    style: "textSmall",
                                                    border: [false, false, false, true]
                                                },
                                                {
                                                    text: '',
                                                    style: "textSmall",
                                                    border: [false, false, false, true]
                                                },
                                                {
                                                    text: '',
                                                    style: "textSmall",
                                                    border: [false, false, false, true]
                                                },
                                                {
                                                    text: 'No',
                                                    style: "textSmall",
                                                    border: [false, false, false, true]
                                                },
                                                {
                                                    text: '(circle answer)',
                                                    style: "textSmall",
                                                    border: [false, false, false, false]
                                                },

                                            ],

                                        ]
                                    },
                                },
                            ],
                            // Question 6 end
                        ],

                    },
                },
                {
                    border: [true, true, false, false],
                    table: {
                        style: "paragraph",
                        body: [
                            [
                                {
                                    text: 'Student declaration\n\n',
                                    bold: true,
                                    fontSize: 11,
                                    border: [true, true, true, false]
                                },
                            ],
                            [
                                {

                                    border: [true, false, true, false],
                                    table: {
                                        style: "paragraph",
                                        widths: [110, 270, 100],
                                        body: [
                                            [
                                                {
                                                    text: 'I confirm that in relation to',
                                                    style: "textSmall",
                                                    bold: true,
                                                    border: [false, false, false, false]
                                                },
                                                {
                                                    text: '',
                                                    border: [false, false, false, true]
                                                },
                                                {
                                                    text: ', in seeking to enrol in',
                                                    style: "textSmall",
                                                    bold: true,
                                                    border: [false, false, false, false]
                                                },

                                            ],
                                        ]
                                    },
                                },

                            ],
                            [
                                {

                                    border: [true, false, true, false],
                                    table: {
                                        widths: [120, 370],
                                        body: [
                                            [
                                                {
                                                    text: '',
                                                    border: [false, false, false, false]
                                                },
                                                {
                                                    text: 'Students Full Name',
                                                    border: [false, false, false, false],
                                                    fontSize: 8,
                                                    color: "grey",
                                                    alignment: 'center'
                                                },

                                            ],
                                        ]
                                    },
                                },
                            ],
                            [
                                {

                                    border: [true, false, true, false],
                                    table: {
                                        style: "paragraph",
                                        widths: [490],
                                        body: [
                                            [
                                                {
                                                    text: '',
                                                    border: [false, false, false, true]
                                                },

                                            ],
                                            [
                                                {
                                                    text: '(Include full title of qualification/s in which you are seeking to enrol)',
                                                    border: [false, false, false, false],
                                                    fontSize: 8,
                                                    color: "grey",
                                                    alignment: 'center'
                                                },

                                            ],
                                        ]
                                    },
                                },

                            ],
                            [
                                {

                                    border: [true, false, true, false],
                                    table: {
                                        body: [
                                            [
                                                { text: '\n\ndeclare the following to be true and accurate statements:', style: "textSmall", border: [false, false, false, false], bod: true },
                                            ],
                                            [
                                                {
                                                    border: [false, false, false, false],
                                                    ul: [
                                                        { text: 'I AM / AM NOT enrolled in a school, including government, non-government, independent, Catholic or home school. (circle appropriate response)', style: "textSmall", margin: [0, 0, 0, 10] },
                                                        { text: ' I AM / AM NOT enrolled in the Commonwealth Government’s Skills for Education and Employment program. (circle appropriate response):', style: "textSmall", margin: [0, 0, 0, 10] },
                                                        { text: 'I understand that my enrolment in the above qualification/s may be subsidised by the Victorian and Commonwealth Governments under the Skills First Program. I understand how enrolling in the above qualification/s will affect my future training options and eligibility for further government subsidised training under the Skills First Program.', style: "textSmall", margin: [0, 0, 0, 10] },
                                                        { text: 'I acknowledge and understand that I may be contacted by the Department or an agent to participate in a student survey, interview or other questionnaire.', style: "textSmall", margin: [0, 0, 0, 10] },

                                                    ]
                                                },

                                            ],
                                        ]
                                    },
                                },

                            ],
                            [
                                {
                                    table: {
                                        style: "paragraph",
                                        widths: [40, 180, 30, 180],
                                        body: [
                                            [
                                                {
                                                    text: 'Signed:  ', bold: true,
                                                    style: "textSmall",
                                                    border: [false, false, false, false]
                                                },
                                                {
                                                    text: '',
                                                    border: [false, false, false, true]
                                                },
                                                {
                                                    text: 'Date:',
                                                    style: 'textSmall',
                                                    bold: true,
                                                    border: [false, false, false, false]
                                                },
                                                {
                                                    text: '',
                                                    border: [false, false, false, true]
                                                },

                                            ],
                                            [
                                                {
                                                    text: '', bold: true,
                                                    style: "textSmall",
                                                    border: [false, false, false, false]
                                                },
                                                {
                                                    text: '',
                                                    border: [false, false, false, false]
                                                },
                                                {
                                                    text: '',
                                                    style: 'textSmall',
                                                    bold: true,
                                                    border: [false, false, false, false]
                                                },
                                                {
                                                    text: '',
                                                    border: [false, false, false, false]
                                                },

                                            ],
                                        ]
                                    },
                                },
                            ]
                        ],

                    },
                },
                {
                    pageBreak: "before",
                    table: {
                        style: "paragraph",
                        widths: [500, 500,],
                        body: [
                            [
                                {

                                    text:
                                        [
                                            { text: "Section C", bold: true }, ' - To be completed by an authorised delegate from Optimistic Futures'
                                        ],
                                    fontSize: 12,
                                    border: [false, false, false, false]
                                },

                            ],
                        ]
                    },
                },
                {
                    border: [true, true, false, false],
                    table: {
                        style: "paragraph",
                        body: [
                            [
                                {

                                    border: [true, true, true, true],
                                    table: {
                                        style: "paragraph",
                                        widths: [370, 120],
                                        body: [
                                            [
                                                {
                                                    border: [false, false, false, false],
                                                    table: {
                                                        widths: [210, 4, 20, 4, 20],
                                                        body: [
                                                            [
                                                                { text: 'Number of courses student is currently eligible for: ', style: "textSmall", bold: true },
                                                                { image: IconBlank, width: 17, height: 15, alignment: 'center' }, { text: '1', style: "textSmall", bold: true },
                                                                { image: IconBlank, width: 17, height: 15, alignment: 'center' }, { text: '2', style: "textSmall", bold: true },
                                                            ],
                                                        ]
                                                    },
                                                    layout: {
                                                        hLineColor: '#fff',
                                                        vLineColor: '#fff',
                                                        hLineColor: '#fff',
                                                        vLineColor: '#fff',
                                                    },
                                                },

                                            ],
                                            [
                                                {
                                                    border: [false, false, false, false],
                                                    table: {
                                                        widths: [495],
                                                        body: [
                                                            [
                                                                { text: 'Optimistic Futures declaration', style: "textSmall", bold: true },
                                                            ],
                                                            [
                                                                { text: 'Based on discussion with the student, the above evidence I have sighted (and retained a copy of) in Section A, and the information provided to me by the student in Section B of this form I believe that the above individual satisfies the Entitlement to Funded Training eligibility criteria as set out in the VET Funding Contract and is eligible for funding under the Skill First Program for the following qualification/s:\n\n\n\n', style: "textSmall" },
                                                            ],

                                                        ]
                                                    },
                                                    layout: {
                                                        hLineColor: '#fff',
                                                        vLineColor: '#fff',
                                                        hLineColor: '#fff',
                                                        vLineColor: '#fff',
                                                    },
                                                },

                                            ],
                                            [
                                                {
                                                    text: '(Include full title of qualification/s in which the student is seeking to enrol)',
                                                    border: [false, true, false, false],
                                                    fontSize: 8,
                                                    color: "grey",
                                                    alignment: 'center'
                                                },
                                            ],
                                            [
                                                {
                                                    text: 'Authorised Training Provider delegate:\n\n\n',
                                                    border: [false, false, false, false],
                                                    style: 'textSmall',
                                                    bold: true
                                                },
                                            ],
                                            [
                                                {
                                                    border: [false, false, false, false],
                                                    table: {
                                                        style: "paragraph",
                                                        widths: [40, 390],
                                                        body: [
                                                            [
                                                                {
                                                                    text: 'Name:  ', bold: true,
                                                                    style: "textSmall",
                                                                    border: [false, false, false, false]
                                                                },
                                                                {
                                                                    text: '',
                                                                    border: [false, false, false, true]
                                                                },

                                                            ],
                                                            [
                                                                {
                                                                    text: 'Position:  ', bold: true,
                                                                    style: "textSmall",
                                                                    border: [false, false, false, false]
                                                                },
                                                                {
                                                                    text: '',
                                                                    border: [false, false, false, true]
                                                                },
                                                            ],

                                                        ]
                                                    },
                                                },
                                            ],
                                            [
                                                {
                                                    border: [false, false, false, false],
                                                    table: {
                                                        style: "paragraph",
                                                        widths: [40, 180, 25, 165],
                                                        body: [
                                                            [
                                                                {
                                                                    text: 'Signed:  ', bold: true,
                                                                    style: "textSmall",
                                                                    border: [false, false, false, false]
                                                                },
                                                                {
                                                                    text: '',
                                                                    border: [false, false, false, true]
                                                                },
                                                                {
                                                                    text: 'Date:', bold: true,
                                                                    style: "textSmall",
                                                                    border: [false, false, false, false]
                                                                },
                                                                {
                                                                    text: '',
                                                                    border: [false, false, false, true]
                                                                },

                                                            ],

                                                        ]
                                                    },
                                                },
                                            ],
                                            [
                                                {
                                                    border: [false, false, false, false],
                                                    table: {
                                                        style: "paragraph",
                                                        widths: [495],
                                                        body: [
                                                            [
                                                                {
                                                                    text: 'Notes Use this section to record additional, relevant eligibility information, including information used by the Training Provider to verify the individual’s eligiďility that is not Đaptured in SeĐtions A, B or C.\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n', bold: true,
                                                                    style: "textSmall",
                                                                    border: [false, false, false, false]
                                                                },
                                                            ],

                                                        ]
                                                    },
                                                },
                                            ]
                                        ]
                                    },
                                },
                            ],
                        ]
                    }
                },
                '\n',
                {
                    pageBreak: "before",
                    table: {
                        widths: [300, 70, 60, 60],
                        body: [

                            [
                                { text: 'AVETMISS Funding Source Identifier – State Training Authority', fontSize: "13", color: "blue", border: [true, true, true, false], alignment: 'left', bold: true, style: "textSmall" }, { text: 'Authorised Referral form required?', bold: true, style: "textSmall", border: [true, true, true, true], rowSpan: 2 }, { text: 'Funding Source codes', bold: true, style: "textSmall", colSpan: 2, border: [false, true, true, false] }, { text: '', bold: true, style: "textSmall", alignment: "center", border: [false, true, true, true] }
                            ],
                            [
                                { text: '', alignment: 'left', bold: true, style: "textSmall", border: [true, false, false, true] }, { text: '', bold: true, style: "textSmall", }, { text: 'State', bold: true, style: "textSmall" }, { text: 'National code code', bold: true, style: "textSmall" }
                            ],
                            [
                                { text: 'GOVERNMENT SUBSIDISED: Victorian Training Guarantee', alignment: 'left', bold: true, style: "textSmall", border: [true, false, false, true] }, { text: '', bold: true, style: "textSmall", }, { text: '', bold: true, style: "textSmall" }, { text: '', bold: true, style: "textSmall" }
                            ],
                            [
                                { text: 'General (not Apprentice/Trainee) - meets VTG eligibility criteria', alignment: 'left', bold: true, style: "textSmall", border: [true, false, false, true] }, { text: 'No', bold: true, style: "textSmall", }, { text: 'P×', bold: true, style: "textSmall" }, { text: '11', bold: true, style: "textSmall" }
                            ],
                            [
                                { text: 'Apprentice / Trainee - meets VTG eligibility criteria', alignment: 'left', bold: true, style: "textSmall", border: [true, false, false, true] }, { text: 'No', bold: true, style: "textSmall", }, { text: 'L×', bold: true, style: "textSmall" }, { text: '11', bold: true, style: "textSmall" }
                            ],
                            [
                                { text: 'Asylum Seeker or Victim of Human Trafficking\n General (not Apprentice/Trainee) VTG enrolment', alignment: 'left', bold: true, style: "textSmall", border: [true, false, false, true] }, { text: 'Yes', bold: true, style: "textSmall", }, { text: 'ASP', bold: true, style: "textSmall" }, { text: '11', bold: true, style: "textSmall" }
                            ],
                            [
                                { text: 'Asylum Seeker or Victim of Human Trafficking \nApprentice / Trainee VTG enrolment', alignment: 'left', bold: true, style: "textSmall", border: [true, false, false, true] }, { text: 'Yes', bold: true, style: "textSmall", }, { text: 'ASL', bold: true, style: "textSmall" }, { text: '11', bold: true, style: "textSmall" }
                            ],
                            [
                                { text: 'NON-GOVERNMENT SUBSIDISED: Fee-for-service', alignment: 'left', bold: true, style: "textSmall", border: [true, false, false, true] }, { text: '', bold: true, style: "textSmall", }, { text: '', bold: true, style: "textSmall" }, { text: '', bold: true, style: "textSmall" }
                            ],
                            [
                                { text: 'Fee for service - domestic full fee-paying students', alignment: 'left', bold: true, style: "textSmall", border: [true, false, false, true] }, { text: 'No', bold: true, style: "textSmall", }, { text: 'S', bold: true, style: "textSmall" }, { text: '20', bold: true, style: "textSmall" }
                            ],
                            [
                                { text: 'VET in schools', alignment: 'left', bold: true, style: "textSmall", border: [true, false, false, true] }, { text: 'No', bold: true, style: "textSmall", }, { text: 'Z20', bold: true, style: "textSmall" }, { text: '20 or 30', bold: true, style: "textSmall" }
                            ],
                        ]
                    },
                    layout: {
                        hLineColor: 'blue',
                        vLineColor: 'blue',
                        hLineColor: 'blue',
                        vLineColor: 'blue',
                    },
                },
                {
                    style: "textSmall",
                    text: [
                        { text: "X", bold: true }, { text: "Enrolments against Funding Source identifier – State Training Authority L and P generally do not require a referral form, with the exception of enrolments under the Young People Transitioning from Care initiative. Individuals who are required to undertake the program pursuant to a community based order made under the Children, Youth and Families Act 2005, and individuals held in the Judy Lazarus Transition Centre must also present relevant documentation." },
                        { text: "\n\n\nOnce completed, this form, including evidence of eligibility and the associated declarations are to be placed in the students file.", bold: true, fontSize: 11 }
                    ]
                }











            ],

        styles: {
            header: {
                fontSize: 12,
                bold: true,
            },
            paragraph: {
                fontSize: 11
            },
            text: {
                fontSize: 10
            },
            textSmall: {
                fontSize: 8.9,
                margin: [0, 3, 0, 0]
            },
            column: {
                fontSize: 7.6,

            }
        }
    };
    if(btn_id=='approve'){
        pdfMake.createPdf(docDefinition).getBase64(function(encodedString) {
            pdf = encodedString;
            $.ajax({
                method: "POST",
                url: "http://dev.softkodes.com/optimisticfuture/formEmail/forms_attestation",
                data: {
                    form:formNumber,
                    user:user_id,
                    form3: pdf
                },
              }).done(function(data){
                  console.log(data)
              }).error((err)=>{
                  console.log(err);
              });
        });
    }
    else if(btn_id=='download'){
        // download the PDF
        // pdfMake.createPdf(docDefinition).download('SKILLS_FIRST_PROGRAM_ENROLMENT_AGREEMENT_FORM.pdf');
        pdfMake.createPdf(docDefinition).open();
    }
}